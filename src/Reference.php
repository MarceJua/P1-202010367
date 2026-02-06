<?php

namespace App;

class Reference
{
    private Environment $env;
    private string $id;
    public string $targetType; // El tipo al que apunta (ej: "int")

    public function __construct(Environment $env, string $id, string $targetType)
    {
        $this->env = $env;
        $this->id = $id;
        $this->targetType = $targetType;
    }

    // Obtener el valor real (Desreferencia *)
    public function dereference()
    {
        return $this->env->obtener($this->id)['valor'];
    }

    // Modificar el valor real (*p = x)
    public function assign($newValue)
    {
        // Aquí podrías validar tipos contra $this->targetType
        $this->env->asignar($this->id, $newValue);
    }
}
