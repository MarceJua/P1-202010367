<?php

namespace App;

use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;
use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;

class CustomErrorListener extends BaseErrorListener
{
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $exception // El padre lo llama $exception, usaremos el mismo nombre
    ): void {
        // Determinamos si es Léxico o Sintáctico
        $tipo = "Sintáctico";

        // Si el mensaje menciona errores de token, suele ser léxico
        if (str_contains($msg, "token recognition error")) {
            $tipo = "Léxico";
        }

        // Enviamos el error a nuestro gestor central
        ErrorManager::agregar($tipo, $msg, $line, $charPositionInLine);
    }
}
