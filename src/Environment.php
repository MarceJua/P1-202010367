<?php

namespace App;

class Environment
{
    // Tabla ahora guarda: ['valor' => X, 'tipo' => Y, 'const' => true/false]
    private array $tabla = [];
    private ?Environment $anterior;

    public function __construct(?Environment $anterior = null)
    {
        $this->anterior = $anterior;
    }

    public function declarar(string $id, $valor, string $tipo, bool $isConst = false): void
    {
        if (isset($this->tabla[$id])) {
            throw new \Exception("Error Semántico: La variable '$id' ya existe en este ámbito.");
        }

        $this->tabla[$id] = [
            'valor' => $valor,
            'tipo'  => $tipo,
            'const' => $isConst // Guardamos si es constante
        ];
    }

    public function asignar(string $id, $valor): void
    {
        // 1. Buscamos en el entorno actual
        if (isset($this->tabla[$id])) {
            // Verificar si es constante
            if ($this->tabla[$id]['const']) {
                throw new \Exception("Error Semántico: No se puede modificar la constante '$id'.");
            }
            $this->tabla[$id]['valor'] = $valor;
            return;
        }

        // 2. Si no está aquí, buscamos en el entorno padre
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
}
