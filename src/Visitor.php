<?php

namespace App;

use App\Compiler\GolampiBaseVisitor;
use App\Compiler\GolampiParser;

class Visitor extends GolampiBaseVisitor
{
    private Environment $entorno; // Propiedad para guardar la tabla de símbolos

    public function __construct()
    {
        // Al iniciar, creamos el entorno Global (sin padre)
        $this->entorno = new Environment(null);
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
            echo "\n"; // Print vacío
            return;
        }

        // 2. Recorremos cada expresión (ej: "Hola", 2026)
        $output = [];
        foreach ($exprListCtx->expression() as $expr) {
            // visit() evalúa la expresión y nos devuelve su valor real (int o string)
            $val = $this->visit($expr);

            if (is_bool($val)) {
                $val = $val ? 'true' : 'false';
            }

            // Quitamos las comillas si es string para imprimir limpio
            if (is_string($val) && str_starts_with($val, '"')) {
                $val = trim($val, '"');
            }
            $output[] = $val;
        }

        // 3. Imprimimos al estilo Go (separado por espacios + salto de línea)
        echo implode(" ", $output) . "\n";
    }


    public function visitVarDeclaration($ctx)
    {
        // 1. Obtener el nombre de la variable
        $id = $ctx->ID()->getText();

        // 2. Obtener el tipo declarado (ej: "int")
        $tipo = $ctx->type()->getText();

        // 3. Obtener el valor (si tiene asignación)
        $valor = null;
        if ($ctx->expression() !== null) {
            $valor = $this->visit($ctx->expression());
        } else {
            // Valor por defecto si no se asigna nada (según enunciado)
            $valor = match ($tipo) {
                'int', 'int32' => 0,
                'string' => "",
                'bool' => false,
                default => null
            };
        }

        // 4. Guardar en la Tabla de Símbolos
        try {
            $this->entorno->declarar($id, $valor, $tipo);
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage() . "\n";
        }
    }

    // --- Asignación ---
    public function visitAssignment($ctx)
    {
        $id = $ctx->ID()->getText();
        $nuevoValor = $this->visit($ctx->expression());

        try {
            $this->entorno->asignar($id, $nuevoValor);
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage() . "\n";
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

    // --- Tipos Primitivos ---
    public function visitIntExpr($ctx)
    {
        return intval($ctx->getText());
    }
    public function visitStrExpr($ctx)
    {
        return $ctx->getText();
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
