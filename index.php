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
fmt.Println(">>> TEST ARRAYS <<<")

// 1. Declaración vacía
var vacio [3]int
fmt.Println("Posición 0 de vacio:", vacio[0])

// 2. Asignación
vacio[0] = 50
vacio[1] = 100
fmt.Println("Posición 0 modificada:", vacio[0])
fmt.Println("Posición 1 modificada:", vacio[1])

// 3. Literal
var numeros [3]int = [3]int{1, 2, 3}
fmt.Println("Array literal pos 2:", numeros[2])

// 4. Función len() con arrays
// Nota: Tu Visitor nativo len() debe detectar si es instancia de GolampiArray
var tamano int = len(numeros)
fmt.Println("Tamaño del array:", tamano)
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
