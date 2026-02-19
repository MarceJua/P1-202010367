<?php

namespace App;

use App\Compiler\GolampiBaseVisitor;
use App\Compiler\GolampiParser;
use App\Compiler\Context\DefaultBlockContext;

class Visitor extends GolampiBaseVisitor
{
    private Environment $entorno;
    private Environment $globalEnv;

    public function __construct()
    {
        // El entorno base se llama "Global"
        $this->entorno = new Environment(null, "Global");
        $this->globalEnv = $this->entorno;
    }

    public function visitFile($ctx)
    {
        // 1. Primera Pasada: Registrar todo
        foreach ($ctx->children as $child) {
            $this->visit($child);
        }

        // 2. Ejecución Automática de 'main'
        try {
            $mainData = $this->entorno->obtener('main');
            $funcionMain = $mainData['valor'];

            if ($funcionMain instanceof FunctionDef) {
                $envAnterior = $this->entorno;
                // Creamos entorno para main
                $this->entorno = new Environment($envAnterior, "main");

                try {
                    $this->visit($funcionMain->block);
                } catch (ReturnException $e) {
                    // Main terminó
                }

                $this->entorno = $envAnterior;
            }
        } catch (\Exception $e) {
            // Solo reportamos si es un error real de que no existe main
            if ($e->getMessage() === "Error Semántico: Variable 'main' no encontrada.") {
                echo "\n[ADVERTENCIA] No se encontró la función 'main'.\n";
            } else {
                ErrorManager::agregar("Ejecución", $e->getMessage(), 0, 0);
            }
        }
        return null;
    }

    // --- VARIABLES Y CONSTANTES ---

    public function visitVarDeclaration($ctx)
    {
        $id = $ctx->ID()->getText();
        $tipoStr = $ctx->type()->getText();

        $valor = null;
        if ($ctx->expression() !== null) {
            $valor = $this->visit($ctx->expression());
        } else {
            // Valores por defecto
            $valor = $this->obtenerValorPorDefecto($tipoStr);
        }

        // Modo Resiliente: Intentamos declarar, si falla registramos error pero NO detenemos.
        try {
            if ($valor !== null) {
                $this->validarTipoConString($tipoStr, $valor, $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            }

            $this->entorno->declarar(
                $id,
                $valor,
                $tipoStr,
                $ctx->getStart()->getLine(),
                $ctx->getStart()->getCharPositionInLine()
            );
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitConstDeclaration($ctx)
    {
        $id = $ctx->ID()->getText();
        $tipo = $ctx->type()->getText();
        $valor = $this->visit($ctx->expression());

        try {
            $this->validarTipoConString($tipo, $valor, $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());

            $this->entorno->declarar(
                $id,
                $valor,
                $tipo,
                $ctx->getStart()->getLine(),
                $ctx->getStart()->getCharPositionInLine(),
                true // esConst
            );
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitShortVarDeclaration($ctx)
    {
        $ids = [];
        foreach ($ctx->idList()->ID() as $node) $ids[] = $node->getText();

        $valores = [];
        foreach ($ctx->expressionList()->expression() as $expr) {
            $valores[] = $this->visit($expr);
        }

        // Desempaquetado de múltiples retornos
        if (count($ids) > 1 && count($valores) === 1 && is_array($valores[0])) {
            $valores = $valores[0];
        }

        if (count($ids) !== count($valores)) {
            ErrorManager::agregar("Semántico", "Desajuste en asignación corta.", $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            return;
        }

        $algunaNueva = false;
        for ($i = 0; $i < count($ids); $i++) {
            $id = $ids[$i];
            $val = $valores[$i];

            // Inferencia básica
            $tipo = $this->inferirTipo($val);

            try {
                $this->entorno->declarar($id, $val, $tipo, $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
                $algunaNueva = true;
            } catch (\Exception $e) {
                // Si ya existe, intentamos asignar
                try {
                    $this->entorno->asignar($id, $val);
                } catch (\Exception $exAsign) {
                    ErrorManager::agregar("Semántico", $exAsign->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
                }
            }
        }

        if (!$algunaNueva) {
            ErrorManager::agregar("Semántico", "Declaración corta ':=' requiere al menos una variable nueva.", $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    // --- ASIGNACIONES ---

    public function visitAssignment($ctx)
    {
        if ($ctx->op === null) return;
        $id = $ctx->ID()->getText();
        $op = $ctx->op->getText();

        try {
            $var = $this->entorno->obtener($id);
            $actual = $var['valor'];
            $valDerecha = $this->visit($ctx->expression());

            $nuevoValor = match ($op) {
                '='  => $valDerecha,
                '+=' => $actual + $valDerecha,
                '-=' => $actual - $valDerecha,
                '*=' => $actual * $valDerecha,
                '/=' => $actual / $valDerecha,
                default => $actual
            };

            // Validar tipo después de la operación
            $this->validarTipoConString($var['tipo'], $nuevoValor, $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            $this->entorno->asignar($id, $nuevoValor);
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitIncrementDecrement($ctx)
    {
        $id = $ctx->ID()->getText();
        $op = $ctx->op->getText();

        try {
            $var = $this->entorno->obtener($id);
            $actual = $var['valor'];

            $nuevoValor = match ($op) {
                '++' => $actual + 1,
                '--' => $actual - 1,
                default => $actual
            };

            $this->entorno->asignar($id, $nuevoValor);
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitIdExpr($ctx)
    {
        $id = $ctx->getText();
        try {
            $variable = $this->entorno->obtener($id);
            return $variable['valor'];
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            return null; // Retornamos null para que la operación continúe (aunque fallará más adelante, pero no crashea)
        }
    }

    // --- ARREGLOS Y PUNTEROS ---

    public function visitArrayAccessExpr($ctx)
    {
        try {
            $arreglo = $this->visit($ctx->expression(0));
            $indice = $this->visit($ctx->expression(1));

            if (!($arreglo instanceof GolampiArray)) {
                throw new \Exception("Intentando indexar algo que no es un array.");
            }
            return $arreglo->get($indice);
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            return null;
        }
    }

    public function visitArrayAssignment($ctx)
    {
        try {
            $arreglo = $this->visit($ctx->expression(0));
            $indice = $this->visit($ctx->expression(1));
            $nuevoValor = $this->visit($ctx->expression(2));
            $op = $ctx->op->getText();

            if (!($arreglo instanceof GolampiArray)) {
                throw new \Exception("Asignación inválida en no-array.");
            }

            $valorActual = $arreglo->get($indice);
            $valorFinal = match ($op) {
                '=' => $nuevoValor,
                '+=' => $valorActual + $nuevoValor,
                '-=' => $valorActual - $nuevoValor,
                '*=' => $valorActual * $nuevoValor,
                '/=' => $valorActual / $nuevoValor,
                default => $nuevoValor
            };
            $arreglo->set($indice, $valorFinal);
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitArrayLiteral($ctx)
    {
        $tipoStr = $ctx->type()->getText();
        preg_match('/^\[(\d+)\](.+)$/', $tipoStr, $matches);
        $size = intval($matches[1]);
        $subType = $matches[2];

        $valores = [];
        if ($ctx->expressionList() !== null) {
            foreach ($ctx->expressionList()->expression() as $expr) {
                $valores[] = $this->visit($expr);
            }
        }
        return new GolampiArray($size, $subType, $valores);
    }

    public function visitPtrAssignment($ctx)
    {
        try {
            $id = $ctx->ID()->getText();
            $nuevoValor = $this->visit($ctx->expression());
            $ptrData = $this->entorno->obtener($id);
            $ptr = $ptrData['valor'];

            if (!($ptr instanceof Reference)) {
                throw new \Exception("La variable '$id' no es un puntero.");
            }
            $ptr->assign($nuevoValor);
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitAddressOfExpr($ctx)
    {
        $id = $ctx->ID()->getText();
        try {
            $var = $this->entorno->obtener($id);
            return new Reference($this->entorno, $id, $var['tipo']);
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            return null;
        }
    }

    public function visitDerefExpr($ctx)
    {
        try {
            $ref = $this->visit($ctx->expression());
            if (!($ref instanceof Reference)) {
                throw new \Exception("Se intentó desreferenciar algo que no es un puntero.");
            }
            return $ref->dereference();
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            return null;
        }
    }

    // --- FUNCIONES ---

    public function visitFuncDeclaration($ctx)
    {
        $id = $ctx->ID()->getText();
        $params = [];
        if ($ctx->paramList() !== null) {
            foreach ($ctx->paramList()->param() as $p) {
                $params[] = ['id' => $p->ID()->getText(), 'tipo' => $p->type()->getText()];
            }
        }
        $returnType = $ctx->typeList() ? $ctx->typeList()->getText() : "void";

        $funcion = new FunctionDef($params, $ctx->block(), $returnType);

        try {
            $this->entorno->declarar($id, $funcion, "func", $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitCallExpr($ctx)
    {
        $nombreFuncion = $ctx->ID()->getText();

        try {
            // Nativas
            if ($nombreFuncion === 'len') {
                $val = $this->visit($ctx->expressionList()->expression(0));
                if (is_string($val)) return strlen($val);
                if ($val instanceof GolampiArray) return $val->size;
                return 0;
            }
            if ($nombreFuncion === 'typeof') {
                $val = $this->visit($ctx->expressionList()->expression(0));
                return $this->inferirTipo($val);
            }
            if ($nombreFuncion === 'substr') {
                $args = $ctx->expressionList()->expression();
                $str = $this->visit($args[0]);
                $start = $this->visit($args[1]);
                $length = $this->visit($args[2]);
                return substr($str, $start, $length);
            }
            if ($nombreFuncion === 'now') return date('Y-m-d H:i:s');

            // Usuario
            $funcData = $this->entorno->obtener($nombreFuncion);
            $funcion = $funcData['valor'];

            if (!($funcion instanceof FunctionDef)) throw new \Exception("'$nombreFuncion' no es función.");

            // Argumentos
            $argumentos = [];
            if ($ctx->expressionList() !== null) {
                foreach ($ctx->expressionList()->expression() as $argExpr) $argumentos[] = $this->visit($argExpr);
            }

            if (count($argumentos) !== count($funcion->params)) {
                throw new \Exception("Argumentos incorrectos para '$nombreFuncion'. Se esperaban " . count($funcion->params) . " pero se recibieron " . count($argumentos) . ".");
            }

            // Entorno de Función
            $envGlobal = $this->getGlobalEnv();
            $envFuncion = new Environment($envGlobal, "func $nombreFuncion");

            for ($i = 0; $i < count($argumentos); $i++) {
                $pName = $funcion->params[$i]['id'];
                $pType = $funcion->params[$i]['tipo'];

                // Validar tipo del argumento
                $this->validarTipoConString($pType, $argumentos[$i], $ctx->getStart()->getLine(), 0);

                $envFuncion->declarar($pName, $argumentos[$i], $pType, $ctx->getStart()->getLine(), 0);
            }

            $envAnterior = $this->entorno;
            $this->entorno = $envFuncion;

            $retorno = null;
            try {
                $this->visit($funcion->block);
            } catch (ReturnException $e) {
                $retorno = $e->value;
            }

            $this->entorno = $envAnterior;
            return $retorno;
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            return null;
        }
    }

    public function visitReturnStmt($ctx)
    {
        $valores = [];
        if ($ctx->expressionList() !== null) {
            foreach ($ctx->expressionList()->expression() as $expr) {
                $valores[] = $this->visit($expr);
            }
        }
        $resultado = match (count($valores)) {
            0 => null,
            1 => $valores[0],
            default => $valores
        };
        throw new ReturnException($resultado);
    }

    // --- ESTRUCTURAS DE CONTROL ---

    public function visitBlock($ctx)
    {
        $anterior = $this->entorno;
        $this->entorno = new Environment($anterior, "block");
        foreach ($ctx->instruction() as $instruccion) $this->visit($instruccion);
        $this->entorno = $anterior;
        return null;
    }

    public function visitIfStatement($ctx)
    {
        $cond = $this->visit($ctx->expression());
        if ($cond === true) {
            $this->visit($ctx->block(0));
        } elseif ($ctx->ELSE() !== null) {
            if ($ctx->ifStmt() !== null) $this->visit($ctx->ifStmt());
            else $this->visit($ctx->block(1));
        }
    }

    public function visitIfStatementSingle($ctx)
    {
        $cond = $this->visit($ctx->expression());
        if ($cond === true) {
            $this->visit($ctx->instruction(0));
        } elseif ($ctx->ELSE() !== null) {
            $this->visit($ctx->instruction(1));
        }
    }

    public function visitSwitchStatement($ctx)
    {
        $valorSwitch = $this->visit($ctx->expression());

        // Cases
        foreach ($ctx->switchCase() as $caseCtx) {
            // Verificar si es default usando el token o el nombre de clase
            if (str_contains(get_class($caseCtx), 'DefaultBlockContext')) continue;

            $listaExprs = $caseCtx->expressionList()->expression();
            foreach ($listaExprs as $exprNode) {
                if ($this->visit($exprNode) == $valorSwitch) {
                    $this->ejecutarInstruccionesDeCase($caseCtx->instruction());
                    return;
                }
            }
        }
        // Default
        foreach ($ctx->switchCase() as $caseCtx) {
            if (str_contains(get_class($caseCtx), 'DefaultBlockContext')) {
                $this->ejecutarInstruccionesDeCase($caseCtx->instruction());
                return;
            }
        }
    }

    private function ejecutarInstruccionesDeCase($instrucciones)
    {
        foreach ($instrucciones as $inst) {
            try {
                $this->visit($inst);
            } catch (BreakException $e) {
                return;
            }
        }
    }

    // ==========================================
    // ✅ CORRECCIÓN: Nuevos métodos para FOR
    // ==========================================

    public function visitForClassic($ctx)
    {
        $anterior = $this->entorno;
        $this->entorno = new Environment($anterior, "for loop");

        // Ejecutar inicialización (forInit)
        $this->visit($ctx->forInit());

        while (true) {
            // Evaluar condición
            if ($this->visit($ctx->expression()) === false) break;

            try {
                $this->visit($ctx->block());
            } catch (BreakException $e) {
                break;
            } catch (ContinueException $e) {
                // Continue: ejecutamos el post antes de la siguiente iteración
            }

            // Ejecutar post (incremento/decremento)
            $this->visit($ctx->forPost());
        }

        $this->entorno = $anterior;
    }

    public function visitForWhile($ctx)
    {
        while (true) {
            if ($this->visit($ctx->expression()) === false) break;

            try {
                $this->visit($ctx->block());
            } catch (BreakException $e) {
                break;
            } catch (ContinueException $e) {
            }
        }
    }

    public function visitForInfinite($ctx)
    {
        while (true) {
            try {
                $this->visit($ctx->block());
            } catch (BreakException $e) {
                break;
            } catch (ContinueException $e) {
            }
        }
    }

    // --- Métodos para forInit ---

    public function visitForVarDecl($ctx)
    {
        // Declaración de variable dentro del for: var i int = 5
        $id = $ctx->ID()->getText();
        $tipoStr = $ctx->type()->getText();

        $valor = null;
        if ($ctx->expression() !== null) {
            $valor = $this->visit($ctx->expression());
        } else {
            $valor = $this->obtenerValorPorDefecto($tipoStr);
        }

        try {
            if ($valor !== null) {
                $this->validarTipoConString($tipoStr, $valor, $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
            }

            $this->entorno->declarar(
                $id,
                $valor,
                $tipoStr,
                $ctx->getStart()->getLine(),
                $ctx->getStart()->getCharPositionInLine()
            );
        } catch (\Exception $e) {
            ErrorManager::agregar("Semántico", $e->getMessage(), $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
        }
    }

    public function visitForAssign($ctx)
    {
        // Asignación en el init del for: i = 0
        return $this->visit($ctx->assignStmt());
    }

    public function visitForEmpty($ctx)
    {
        // Init vacío
        return null;
    }

    // --- Métodos para forPost ---

    public function visitForPostAssign($ctx)
    {
        // Post del for: i++, i--, etc.
        return $this->visit($ctx->assignStmt());
    }

    public function visitForPostEmpty($ctx)
    {
        // Post vacío
        return null;
    }

    // ==========================================
    // ✅ FIN DE CORRECCIONES PARA FOR
    // ==========================================

    // --- UTILIDADES DE VALIDACIÓN ---

    private function obtenerValorPorDefecto(string $tipoStr)
    {
        if (str_starts_with($tipoStr, '[')) {
            if (preg_match('/^\[(\d+)\](.+)$/', $tipoStr, $matches)) {
                $size = intval($matches[1]);
                $subType = $matches[2];
                return new GolampiArray($size, $subType);
            }
        }

        return match ($tipoStr) {
            'int', 'int32' => 0,
            'float32' => 0.0,
            'string' => "",
            'bool' => false,
            'rune' => 0,
            default => null
        };
    }

    private function inferirTipo($valor): string
    {
        return match (true) {
            is_int($valor) => 'int',
            is_float($valor) => 'float32',
            is_bool($valor) => 'bool',
            is_string($valor) => 'string',
            $valor instanceof GolampiArray => 'array',
            is_null($valor) => 'nil',
            default => 'unknown'
        };
    }

    private function validarTipoConString(string $tipoEsperado, $valor, int $linea, int $columna): void
    {
        if ($valor === null && $tipoEsperado !== 'nil') {
            // Permitimos null para inicializaciones
            return;
        }

        // Arrays
        if (str_starts_with($tipoEsperado, '[')) {
            if (!($valor instanceof GolampiArray)) {
                ErrorManager::agregar(
                    "Semántico",
                    "Error de tipo: Se esperaba un array '$tipoEsperado' pero se recibió '" . $this->inferirTipo($valor) . "'.",
                    $linea,
                    $columna
                );
            }
            return;
        }

        // Punteros
        if (str_starts_with($tipoEsperado, '*')) {
            if (!($valor instanceof Reference)) {
                ErrorManager::agregar(
                    "Semántico",
                    "Error de tipo: Se esperaba un puntero '$tipoEsperado' pero se recibió '" . $this->inferirTipo($valor) . "'.",
                    $linea,
                    $columna
                );
            }
            return;
        }

        $tipoReal = $this->inferirTipo($valor);

        // Normalizar tipos (alias compatibles)
        $tipoEsperadoNorm = match ($tipoEsperado) {
            'int32' => 'int',
            'rune' => 'int', // Rune es básicamente int32
            default => $tipoEsperado
        };

        $tipoRealNorm = match ($tipoReal) {
            'double' => 'float32',
            default => $tipoReal
        };

        if ($tipoEsperadoNorm !== $tipoRealNorm && $tipoReal !== 'unknown') {
            ErrorManager::agregar(
                "Semántico",
                "Error de tipo: Se esperaba '$tipoEsperado' pero se recibió '$tipoReal'.",
                $linea,
                $columna
            );
        }
    }

    // --- BASICOS ---
    public function visitPrintStmt($ctx)
    {
        $output = [];
        if ($ctx->expressionList() !== null) {
            foreach ($ctx->expressionList()->expression() as $expr) {
                $val = $this->visit($expr);
                $output[] = (is_bool($val) ? ($val ? 'true' : 'false') : $val);
            }
        }
        echo implode(" ", $output) . "\n";
    }

    public function visitIntExpr($ctx)
    {
        return intval($ctx->getText());
    }
    public function visitFloatExpr($ctx)
    {
        return floatval($ctx->getText());
    }
    public function visitBoolExpr($ctx)
    {
        return $ctx->getText() === 'true';
    }
    public function visitNilExpr($ctx)
    {
        return null;
    }
    public function visitRuneExpr($ctx)
    {
        $char = trim($ctx->getText(), "'");
        // Manejar escapes
        $char = str_replace(['\\n', '\\t', '\\\\', "\\'"], ["\n", "\t", "\\", "'"], $char);
        return ord($char); // Retornar como int (código ASCII/Unicode)
    }
    public function visitStrExpr($ctx)
    {
        return str_replace(['\\n', '\\t', '\\"', '\\\\'], ["\n", "\t", "\"", "\\"], substr($ctx->getText(), 1, -1));
    }

    // Aritmética y Lógica
    public function visitUnaryMinusExpr($ctx)
    {
        return -$this->visit($ctx->expression());
    }

    public function visitAddSubExpr($ctx)
    {
        $l = $this->visit($ctx->expression(0));
        $r = $this->visit($ctx->expression(1));
        return ($ctx->op->getText() === '+') ? ($l + $r) : ($l - $r);
    }

    public function visitMulDivExpr($ctx)
    {
        $l = $this->visit($ctx->expression(0));
        $r = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();

        switch ($op) {
            case '*':
                return $l * $r;
            case '/':
                if ($r == 0) {
                    ErrorManager::agregar("Semántico", "División por cero.", $ctx->getStart()->getLine(), $ctx->getStart()->getCharPositionInLine());
                    return 0;
                }
                if (is_int($l) && is_int($r)) return intdiv($l, $r);
                return $l / $r;
            case '%':
                return $l % $r;
        }
        return null;
    }

    public function visitRelExpr($ctx)
    {
        $l = $this->visit($ctx->expression(0));
        $r = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();
        return match ($op) {
            '<' => $l < $r,
            '>' => $l > $r,
            '<=' => $l <= $r,
            '>=' => $l >= $r,
            default => false
        };
    }

    public function visitEqExpr($ctx)
    {
        $l = $this->visit($ctx->expression(0));
        $r = $this->visit($ctx->expression(1));
        return ($ctx->op->getText() === '==') ? ($l === $r) : ($l !== $r);
    }

    public function visitAndExpr($ctx)
    {
        return $this->visit($ctx->expression(0)) && $this->visit($ctx->expression(1));
    }

    public function visitOrExpr($ctx)
    {
        return $this->visit($ctx->expression(0)) || $this->visit($ctx->expression(1));
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

    public function visitExprStmt($ctx)
    {
        $this->visit($ctx->expression());
    }

    public function visitParenExpr($ctx)
    {
        return $this->visit($ctx->expression());
    }

    private function getGlobalEnv()
    {
        return $this->globalEnv;
    }
}
