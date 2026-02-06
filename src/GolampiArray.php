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

        // Rellenar con valores por defecto o iniciales
        for ($i = 0; $i < $size; $i++) {
            if (isset($initialData[$i])) {
                $this->data[$i] = $initialData[$i];
            } else {
                // Valor por defecto según el tipo
                $this->data[$i] = match ($subType) {
                    'int', 'int32' => 0,
                    'string' => "",
                    'bool' => false,
                    default => null
                };
            }
        }
    }

    public function set($index, $value)
    {
        if ($index < 0 || $index >= $this->size) {
            throw new \Exception("Error Runtime: Índice fuera de rango [$index].");
        }
        // Aquí podrías validar tipos si quisieras ser estricto
        $this->data[$index] = $value;
    }

    public function get($index)
    {
        if ($index < 0 || $index >= $this->size) {
            throw new \Exception("Error Runtime: Índice fuera de rango [$index].");
        }
        return $this->data[$index];
    }
}
