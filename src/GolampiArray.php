<?php

namespace App;

class GolampiArray
{
    public array $data = [];
    public int $size;
    public string $subType;

    public function __construct(int $size, string $subType, array $initialData = [])
    {
        $this->size = $size;
        $this->subType = $subType;

        // Rellenar con valores
        for ($i = 0; $i < $size; $i++) {
            if (isset($initialData[$i])) {
                $this->data[$i] = $initialData[$i];
            } else {
                // --- LÓGICA RECURSIVA PARA MULTIDIMENSIONALES ---
                if (str_starts_with($subType, '[')) {
                    // Si el subtipo es otro array (ej: "[3]int"), lo creamos recursivamente
                    // Regex para separar dimensión y tipo: [3]int -> size=3, type=int
                    if (preg_match('/^\[(\d+)\](.+)$/', $subType, $matches)) {
                        $innerSize = intval($matches[1]);
                        $innerType = $matches[2];
                        $this->data[$i] = new GolampiArray($innerSize, $innerType);
                    }
                } else {
                    // Valores primitivos por defecto
                    $this->data[$i] = match ($subType) {
                        'int', 'int32' => 0,
                        'float', 'float32' => 0.0,
                        'string' => "",
                        'bool' => false,
                        default => null
                    };
                }
            }
        }
    }

    public function set($index, $value)
    {
        $this->validarIndice($index);

        // Validación básica de tipos (Opcional pero recomendada)
        if (str_starts_with($this->subType, '[')) {
            if (!($value instanceof GolampiArray)) {
                throw new \Exception("Error Runtime: Se esperaba un array en la posición $index.");
            }
        }

        $this->data[$index] = $value;
    }

    public function get($index)
    {
        $this->validarIndice($index);
        return $this->data[$index];
    }

    private function validarIndice($index)
    {
        if ($index < 0 || $index >= $this->size) {
            throw new \Exception("Error Runtime: Índice fuera de rango [$index] (Tamaño: {$this->size}).");
        }
    }
}
