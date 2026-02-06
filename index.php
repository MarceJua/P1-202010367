<?php

// --- Configuración de Errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Compiler\GolampiLexer;
use App\Compiler\GolampiParser;
use App\Visitor;

$input = '
fmt.Println(">>> TEST DE CADENAS Y TIPOS <<<")

// 1. Prueba de Escape Sequences
fmt.Println("Línea 1\nLínea 2 con\ttabulación y \"comillas\" ")

// 2. Prueba de Substr y Len corregidos
var texto string = "Golampi 2026"
// Ahora len debería ser 12 (sin comillas)
fmt.Println("Texto:", texto)
fmt.Println("Longitud real:", len(texto)) 

// Substr(0, 7) de "Golampi 2026" debería ser "Golampi" (7 chars)
fmt.Println("Substr(0,7):", substr(texto, 0, 7))

// 3. Prueba de TypeOf
var entero int = 100
var cadena string = "Hola"
var booleano bool = true

fmt.Println("Tipo de entero:", typeof(entero))
fmt.Println("Tipo de cadena:", typeof(cadena))
fmt.Println("Tipo de bool:", typeof(booleano))
';

try {
    // 1. Entrada
    $inputStream = InputStream::fromString($input);

    // 2. Lexer (Tokenización)
    $lexer = new GolampiLexer($inputStream);
    $tokens = new CommonTokenStream($lexer);

    // 3. Parser (Análisis Sintáctico)
    $parser = new GolampiParser($tokens);
    $tree = $parser->file();

    // Validar si hubo errores sintácticos graves que devolvieron null
    if ($tree === null) {
        echo "Error Crítico: El parser no pudo generar el árbol.\n";
        exit(1);
    }

    // 4. Visitor (Ejecución)
    $visitor = new Visitor();
    $visitor->visit($tree);
} catch (\Throwable $e) {
    // Manejo elegante de errores
    echo "\nError: Ocurrió un problema durante la ejecución.\n";
    echo "Mensaje: " . $e->getMessage() . "\n";
}
