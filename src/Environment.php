<?php

namespace App;

class Environment
{
    private array $tabla = [];
    private ?Environment $anterior;
    public string $nombreAmbito;

    // --- REPORTE ESTÁTICO (Aquí se guardará todo el historial) ---
    public static array $reporte = [];

    public function __construct(?Environment $anterior = null, string $nombre = "Global")
    {
        $this->anterior = $anterior;
        $this->nombreAmbito = $nombre;
    }

    // Actualizamos declarar para recibir línea y columna
    public function declarar(string $id, $valor, string $tipo, int $linea, int $col, bool $isConst = false): void
    {
        if (isset($this->tabla[$id])) {
            throw new \Exception("Error Semántico: La variable '$id' ya existe en el ámbito '{$this->nombreAmbito}'.");
        }

        $this->tabla[$id] = [
            'valor' => $valor,
            'tipo'  => $tipo,
            'const' => $isConst
        ];

        // --- GUARDAR EN REPORTE ---
        $valStr = "null";
        if ($valor !== null) {
            if (is_bool($valor)) $valStr = $valor ? "true" : "false";
            elseif ($valor instanceof GolampiArray) $valStr = "Array[" . $valor->size . "]";
            elseif ($valor instanceof FunctionDef) $valStr = "Function";
            elseif ($valor instanceof Reference) $valStr = "Pointer -> " . $valor->targetType;
            elseif (is_array($valor)) $valStr = "List"; // Para retornos múltiples temporales
            else $valStr = (string)$valor;
        }

        self::$reporte[] = [
            'id' => $id,
            'tipo' => $isConst ? "const $tipo" : $tipo,
            'ambito' => $this->nombreAmbito,
            'valor' => $valStr,
            'linea' => $linea,
            'columna' => $col
        ];
    }

    public function asignar(string $id, $valor): void
    {
        if (isset($this->tabla[$id])) {
            if ($this->tabla[$id]['const']) {
                throw new \Exception("Error Semántico: No se puede modificar la constante '$id'.");
            }
            $this->tabla[$id]['valor'] = $valor;
            return;
        }

        if ($this->anterior !== null) {
            $this->anterior->asignar($id, $valor);
            return;
        }

        throw new \Exception("Error Semántico: La variable '$id' no ha sido declarada.");
    }

    public function obtener(string $id): array
    {
        if (isset($this->tabla[$id])) {
            return $this->tabla[$id];
        }

        if ($this->anterior !== null) {
            return $this->anterior->obtener($id);
        }

        throw new \Exception("Error Semántico: Variable '$id' no encontrada.");
    }

    // Método para limpiar el reporte entre ejecuciones (útil para la GUI)
    public static function limpiarReporte()
    {
        self::$reporte = [];
    }
}
