<?php

namespace App;

class ErrorManager
{
    // Formato: ['tipo' => 'Semántico', 'desc' => '...', 'linea' => 1, 'col' => 5]
    private static array $errores = [];

    public static function agregar(string $tipo, string $descripcion, int $linea, int $columna)
    {
        self::$errores[] = [
            'tipo' => $tipo,
            'desc' => $descripcion,
            'linea' => $linea,
            'col' => $columna
        ];
    }

    public static function getErrores()
    {
        return self::$errores;
    }

    public static function limpiar()
    {
        self::$errores = [];
    }

    public static function hayErrores()
    {
        return count(self::$errores) > 0;
    }
}
