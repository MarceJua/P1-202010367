<?php

namespace App;

use App\Compiler\GolampiBaseVisitor;
use App\Compiler\GolampiParser;

class Visitor extends GolampiBaseVisitor
{
    private Environment $entorno;
    private Environment $globalEnv; // <--- 1. Asegúrate de tener esto declarado

    public function __construct()
    {
        $this->entorno = new Environment(null);
        $this->globalEnv = $this->entorno;
    }

    /**
     * Visita la regla principal del archivo.
     * Recorre todas las instrucciones encontradas.
     */
    public function visitFile($ctx)
    {
        // Visitamos todos los hijos
        foreach ($ctx->children as $child) {
            $this->visit($child);
        }
        return null;
    }

    /**
     * Regla: printStmt
     * Formato: fmt.Println(exp1, exp2, ...)
     */
    public function visitPrintStmt($ctx)
    {
        $exprListCtx = $ctx->expressionList();

        if ($exprListCtx === null) {
            echo "\n";
            return;
        }

        $output = [];
        foreach ($exprListCtx->expression() as $expr) {
            $val = $this->visit($expr);

            if (is_bool($val)) {
                $val = $val ? 'true' : 'false';
            }

            // Nota: Ya no hacemos trim($val, '"') porque visitStrExpr lo hace.
            $output[] = $val;
        }

        echo implode(" ", $output) . "\n";
    }

    public function visitVarDeclaration($ctx)
    {
        $id = $ctx->ID()->getText();
        $tipoStr = $ctx->type()->getText(); // Ej: "[3]int" o "int"

        $valor = null;
        if ($ctx->expression() !== null) {
            $valor = $this->visit($ctx->expression());
        } else {

            if (str_starts_with($tipoStr, '[')) {
                // Parsear dimensión y subtipo: [5]int
                if (preg_match('/^\[(\d+)\](.+)$/', $tipoStr, $matches)) {
                    $size = intval($matches[1]);
                    $subType = $matches[2];
                    $valor = new GolampiArray($size, $subType);
                }
            } else {
                // Tipos primitivos normales
                $valor = match ($tipoStr) {
                    'int', 'int32' => 0,
                    'string' => "",
                    'bool' => false,
                    default => null
                };
            }
        }

        // Validación de seguridad (Funciones)
        if ($valor instanceof FunctionDef) {
            echo "[ERROR] No puedes asignar funciones a variables.\n";
            return;
        }

        try {
            $this->entorno->declarar($id, $valor, $tipoStr);
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage() . "\n";
        }
    }

    public function visitArrayLiteral($ctx)
    {
        $tipoStr = $ctx->type()->getText(); // [3]int

        // Parsear tamaño y tipo
        if (!preg_match('/^\[(\d+)\](.+)$/', $tipoStr, $matches)) {
            throw new \Exception("Error Sintáctico: Formato de array inválido.");
        }
        $size = intval($matches[1]);
        $subType = $matches[2];

        // Recolectar valores
        $valores = [];
        if ($ctx->expressionList() !== null) {
            foreach ($ctx->expressionList()->expression() as $expr) {
                $valores[] = $this->visit($expr);
            }
        }

        if (count($valores) > $size) {
            throw new \Exception("Error Semántico: Demasiados elementos para un array de tamaño $size.");
        }

        return new GolampiArray($size, $subType, $valores);
    }

    public function visitArrayAccessExpr($ctx)
    {
        // 1. Evaluar la parte izquierda (el array)
        $arreglo = $this->visit($ctx->expression(0));
        // 2. Evaluar el índice
        $indice = $this->visit($ctx->expression(1));

        if (!($arreglo instanceof GolampiArray)) {
            throw new \Exception("Error Semántico: Intentando indexar algo que no es un array.");
        }
        if (!is_int($indice)) {
            throw new \Exception("Error Semántico: El índice debe ser entero.");
        }

        return $arreglo->get($indice);
    }

    public function visitArrayAssignment($ctx)
    {
        // Estructura: expression[0] '[' expression[1] ']' = expression[2]

        // 1. Obtener el array (objeto)
        $arreglo = $this->visit($ctx->expression(0));

        // 2. Obtener índice y valor
        $indice = $this->visit($ctx->expression(1));
        $nuevoValor = $this->visit($ctx->expression(2));
        $op = $ctx->op->getText();

        if (!($arreglo instanceof GolampiArray)) {
            throw new \Exception("Error Semántico: Asignación inválida en no-array.");
        }

        // Manejo de operadores (+=, =, etc)
        $valorActual = $arreglo->get($indice);

        $valorFinal = match ($op) {
            '=' => $nuevoValor,
            '+=' => $valorActual + $nuevoValor,
            '-=' => $valorActual - $nuevoValor,
            default => $nuevoValor
        };

        // Guardar cambio (Como es un objeto, se actualiza por referencia automáticamente)
        $arreglo->set($indice, $valorFinal);
    }

    // --- Asignación ---
    public function visitAssignment($ctx)
    {
        // Aseguramos que la propiedad op exista (se generará al compilar bien el g4)
        if ($ctx->op === null) return;

        $id = $ctx->ID()->getText();
        $op = $ctx->op->getText(); // Ahora sí funcionará

        // Obtenemos valor actual
        $var = $this->entorno->obtener($id); // OJO: obtener() devuelve array ['valor'=>X, 'tipo'=>Y]
        $actual = $var['valor'];

        // Calculamos nuevo valor
        $valDerecha = $this->visit($ctx->expression());

        $nuevoValor = match ($op) {
            '='  => $valDerecha,
            '+=' => $actual + $valDerecha,
            '-=' => $actual - $valDerecha,
            '*=' => $actual * $valDerecha,
            '/=' => $actual / $valDerecha,
            default => $actual
        };

        $this->entorno->asignar($id, $nuevoValor);
    }

    public function visitIncrementDecrement($ctx)
    {
        $id = $ctx->ID()->getText();
        $actual = $this->entorno->obtener($id)['valor'];
        $op = $ctx->op->getText();

        if ($op === '++') $this->entorno->asignar($id, $actual + 1);
        if ($op === '--') $this->entorno->asignar($id, $actual - 1);
    }

    // --- NUEVO: Ciclos FOR ---

    public function visitForClassic($ctx)
    {
        // 1. Crear entorno para el ciclo (el 'var i = 0' vive aquí)
        $anterior = $this->entorno;
        $this->entorno = new Environment($anterior);

        // 2. Ejecutar Inicialización (var i int = 0)
        $this->visit($ctx->varDecl());

        // 3. Ciclo
        while (true) {
            // Evaluar Condición
            $cond = $this->visit($ctx->expression());
            if ($cond === false) break;

            try {
                // Ejecutar Bloque (OJO: El bloque crea SU PROPIO sub-entorno, eso está bien)
                $this->visit($ctx->block());
            } catch (BreakException $e) {
                break; // Rompe el while de PHP
            } catch (ContinueException $e) {
                // No hace nada, solo salta al update
            }

            // Ejecutar Update (i++)
            $this->visit($ctx->assignStmt());
        }

        // 4. Restaurar entorno
        $this->entorno = $anterior;
    }

    public function visitForWhile($ctx)
    {
        while (true) {
            $cond = $this->visit($ctx->expression());
            if ($cond === false) break;

            try {
                $this->visit($ctx->block());
            } catch (BreakException $e) {
                break;
            } catch (ContinueException $e) {
                continue;
            }
        }
    }

    //Usar variables en expresiones (print(x)) ---
    public function visitIdExpr($ctx)
    {
        $id = $ctx->getText();
        try {
            $variable = $this->entorno->obtener($id);
            return $variable['valor'];
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage() . "\n";
            return null;
        }
    }

    public function visitAddSubExpr($ctx)
    {
        $left = $this->visit($ctx->expression(0));
        $right = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();

        if ($op === '+') {
            if (is_string($left) || is_string($right)) {
                return $left . $right;
            }
            return $left + $right;
        }

        if ($op === '-') {
            if (!is_numeric($left) || !is_numeric($right)) {
                throw new \Exception("Error Semántico: No se pueden restar valores no numéricos.");
            }
            return $left - $right;
        }

        return null;
    }

    public function visitMulDivExpr($ctx)
    {
        $left = $this->visit($ctx->expression(0));
        $right = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();

        if (!is_numeric($left) || !is_numeric($right)) {
            throw new \Exception("Error Semántico: Operación aritmética inválida con tipos no numéricos.");
        }

        switch ($op) {
            case '*':
                return $left * $right;
            case '/':
                if ($right == 0) throw new \Exception("Error en tiempo de ejecución: División por cero.");
                return $left / $right;
            case '%':
                return $left % $right;
        }
        return null;
    }

    public function visitBlock($ctx)
    {
        $anterior = $this->entorno;

        $this->entorno = new Environment($anterior);

        foreach ($ctx->instruction() as $instruccion) {
            $this->visit($instruccion);
        }

        $this->entorno = $anterior;
        return null;
    }

    // --- SENTENCIA IF ---

    public function visitIfStatement($ctx)
    {
        $condicion = $this->visit($ctx->expression());

        if (!is_bool($condicion)) {
            throw new \Exception("Error Semántico: La condición del IF debe ser booleana.");
        }

        if ($condicion === true) {
            $this->visit($ctx->block(0));
            return;
        }

        if ($ctx->ELSE() !== null) {

            if ($ctx->ifStmt() !== null) {
                $this->visit($ctx->ifStmt());
            } else {
                $this->visit($ctx->block(1));
            }
        }
    }

    // --- OPERADORES RELACIONALES (<, >, ==) ---

    public function visitRelExpr($ctx)
    {
        $left = $this->visit($ctx->expression(0));
        $right = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();

        if (gettype($left) !== gettype($right) && !is_numeric($left)) {
            throw new \Exception("Error Semántico: Tipos incompatibles para comparación '$op'.");
        }

        return match ($op) {
            '<' => $left < $right,
            '>' => $left > $right,
            '<=' => $left <= $right,
            '>=' => $left >= $right,
            default => false
        };
    }

    public function visitEqExpr($ctx)
    {
        $left = $this->visit($ctx->expression(0));
        $right = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();

        return match ($op) {
            '==' => $left === $right,
            '!=' => $left !== $right,
            default => false
        };
    }

    // --- FUNCIONES ---

    public function visitFuncDeclaration($ctx)
    {
        $id = $ctx->ID()->getText();

        // 1. Recopilar parámetros
        $params = [];
        if ($ctx->paramList() !== null) {
            foreach ($ctx->paramList()->param() as $p) {
                $params[] = [
                    'id' => $p->ID()->getText(),
                    'tipo' => $p->type()->getText()
                ];
            }
        }

        // 2. Determinar tipo de retorno
        $returnType = "void";
        if ($ctx->typeList() !== null) {
            $returnType = $ctx->typeList()->getText();
        }

        // 3. Guardar la definición en el entorno actual (debería ser el global)
        $funcion = new FunctionDef($params, $ctx->block(), $returnType);
        $this->entorno->declarar($id, $funcion, "function");
    }

    public function visitReturnStmt($ctx)
    {
        $valor = null;
        if ($ctx->expressionList() !== null) {
            // Por simplicidad tomamos el primero (Golampi soporta múltiples, pero paso a paso)
            $valor = $this->visit($ctx->expressionList()->expression(0));
        }
        throw new ReturnException($valor);
    }

    public function visitCallExpr($ctx)
    {
        $nombreFuncion = $ctx->ID()->getText();

        // ===========================================================
        //                 Fase 7: FUNCIONES NATIVAS
        // ===========================================================

        // 1. Interceptamos las funciones nativas antes de buscar en el entorno
        if ($nombreFuncion === 'len') {
            if ($ctx->expressionList() === null || count($ctx->expressionList()->expression()) !== 1) {
                throw new \Exception("Error Semántico: 'len' espera 1 argumento.");
            }

            $valor = $this->visit($ctx->expressionList()->expression(0));

            if (is_string($valor)) {
                return strlen($valor); // Cuenta bytes (estándar en Go/C)
            }
            if ($valor instanceof GolampiArray) {
                return $valor->size;
            }
            throw new \Exception("Error Semántico: 'len' no soporta este tipo de dato.");
        }

        if ($nombreFuncion === 'typeof') {
            if ($ctx->expressionList() === null || count($ctx->expressionList()->expression()) !== 1) {
                throw new \Exception("Error Semántico: 'typeof' espera 1 argumento.");
            }

            $valor = $this->visit($ctx->expressionList()->expression(0));

            if ($valor instanceof GolampiArray) {
                return "array"; // O si prefieres algo más pro: "[]" . $valor->subType;
            }

            // Mapeo exacto a tipos de Golampi
            return match (gettype($valor)) {
                'integer' => 'int',
                'double'  => 'float32',
                'string'  => 'string',
                'boolean' => 'bool',
                'NULL'    => 'nil',
                'array'   => 'array', // Para cuando implementemos arreglos
                default   => 'unknown'
            };
        }

        if ($nombreFuncion === 'substr') {
            $args = $ctx->expressionList()->expression();
            if (count($args) !== 3) {
                throw new \Exception("Error Semántico: 'substr' espera 3 argumentos.");
            }

            $str = $this->visit($args[0]);
            $start = $this->visit($args[1]);
            $length = $this->visit($args[2]);

            // Validación estricta
            if (!is_string($str) || !is_int($start) || !is_int($length)) {
                throw new \Exception("Error Semántico: Tipos incorrectos para 'substr(string, int, int)'.");
            }

            // Manejo seguro de PHP substr (para evitar warnings si el índice se pasa)
            if ($start < 0 || $length < 0) {
                throw new \Exception("Error Runtime: Índices negativos en substr.");
            }

            $resultado = substr($str, $start, $length);
            return $resultado === false ? "" : $resultado;
        }

        if ($nombreFuncion === 'now') {
            return date('Y-m-d H:i:s');
        }

        // ===========================================================
        //              FIN FUNCIONES NATIVAS
        // ===========================================================

        // 2. Si no es nativa, buscamos la función de usuario en el entorno
        // (Esta es tu lógica original, la mantenemos igual)

        try {
            $funcData = $this->entorno->obtener($nombreFuncion);
        } catch (\Exception $e) {
            throw new \Exception("Error Semántico: Función '$nombreFuncion' no definida.");
        }

        $funcion = $funcData['valor'];

        if (!($funcion instanceof FunctionDef)) {
            throw new \Exception("Error Semántico: '$nombreFuncion' no es una función.");
        }

        // Evaluar Argumentos
        $argumentos = [];
        if ($ctx->expressionList() !== null) {
            foreach ($ctx->expressionList()->expression() as $argExpr) {
                $argumentos[] = $this->visit($argExpr);
            }
        }

        // Validar cantidad de argumentos
        if (count($argumentos) !== count($funcion->params)) {
            throw new \Exception("Error: La función '$nombreFuncion' espera " . count($funcion->params) . " argumentos.");
        }

        // Preparar entorno nuevo (Global como padre)
        $envGlobal = $this->getGlobalEnv();
        $envFuncion = new Environment($envGlobal);

        // Asignar parámetros
        for ($i = 0; $i < count($argumentos); $i++) {
            $paramNombre = $funcion->params[$i]['id'];
            $paramTipo = $funcion->params[$i]['tipo'];
            $envFuncion->declarar($paramNombre, $argumentos[$i], $paramTipo);
        }

        // Ejecutar
        $envAnterior = $this->entorno;
        $this->entorno = $envFuncion;

        $retorno = null;
        try {
            $this->visit($funcion->block);
        } catch (ReturnException $e) {
            $retorno = $e->value;
        }

        // Restaurar
        $this->entorno = $envAnterior;
        return $retorno;
    }

    // Método auxiliar para exprStmt (llamada sin uso de valor)
    public function visitExprStmt($ctx)
    {
        $this->visit($ctx->expression());
    }

    private function getGlobalEnv()
    {
        return $this->globalEnv;
    }

    // --- OPERADORES LÓGICOS (&&, ||) ---

    public function visitAndExpr($ctx)
    {
        $left = $this->visit($ctx->expression(0));
        // Si el lado izquierdo es falso, NO evaluamos el derecho (Cortocircuito)
        if ($left === false) return false;

        return $this->visit($ctx->expression(1));
    }

    public function visitOrExpr($ctx)
    {
        $left = $this->visit($ctx->expression(0));
        // Si el lado izquierdo es verdadero, NO evaluamos el derecho
        if ($left === true) return true;

        return $this->visit($ctx->expression(1));
    }

    public function visitNotExpr($ctx)
    {
        return !$this->visit($ctx->expression());
    }

    public function visitBreakStmt($ctx)
    {
        throw new BreakException();
    }
    public function visitContinueStmt($ctx)
    {
        throw new ContinueException();
    }

    // --- Tipos Primitivos ---
    public function visitIntExpr($ctx)
    {
        return intval($ctx->getText());
    }
    public function visitStrExpr($ctx)
    {
        $textoRaw = $ctx->getText();
        $contenido = substr($textoRaw, 1, -1);
        $procesado = str_replace(
            ['\\n', '\\t', '\\r', '\\"', '\\\\'],
            ["\n", "\t", "\r", "\"", "\\"],
            $contenido
        );

        return $procesado;
    }
    public function visitBoolExpr($ctx)
    {
        return $ctx->getText() === 'true';
    }

    // Paréntesis (exp)
    public function visitParenExpr($ctx)
    {
        return $this->visit($ctx->expression());
    }
}
