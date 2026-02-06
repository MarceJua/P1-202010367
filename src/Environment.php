<?php

namespace App;

class Environment
{
    private array $tabla = []; // Aquí guardaremos las variables: ['id' => ['valor' => X, 'tipo' => Y]]
    private ?Environment $anterior; // Puntero al entorno padre (para manejar scopes globales y locales)

    public function __construct(?Environment $anterior = null)
    {
        $this->anterior = $anterior;
    }

    /**
     * Guarda una nueva variable en el entorno actual.
     * Útil para declaraciones como: var x int = 10;
     */
    public function declarar(string $id, $valor, string $tipo): void
    {
        if (isset($this->tabla[$id])) {
            // El enunciado pide reportar error si ya existe [cite: 679]
            // Por ahora lanzamos excepción, luego conectaremos con tu lista de errores.
            throw new \Exception("Error Semántico: La variable '$id' ya existe en este ámbito.");
        }

        $this->tabla[$id] = [
            'valor' => $valor,
            'tipo'  => $tipo
        ];
    }

    /**
     * Actualiza el valor de una variable existente.
     * Busca primero en el entorno actual, si no, sube al padre.
     * Útil para: x = 20;
     */
    public function asignar(string $id, $valor): void
    {
        // 1. Buscamos en el entorno actual
        if (isset($this->tabla[$id])) {
            // TODO: Aquí validaremos tipos más adelante (Fase 3)
            $this->tabla[$id]['valor'] = $valor;
            return;
        }

        // 2. Si no está aquí, buscamos en el entorno padre (recursividad)
        if ($this->anterior !== null) {
            $this->anterior->asignar($id, $valor);
            return;
        }

        // 3. Si no existe en ningún lado -> Error [cite: 678]
        throw new \Exception("Error Semántico: La variable '$id' no ha sido declarada.");
    }

    /**
     * Obtiene el valor y tipo de una variable.
     * Útil para expresiones como: print(x + 5);
     */
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
