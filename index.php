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
fmt.Println(">>> TEST ARRAY MULTIDIMENSIONAL Y FOR <<<")

// 1. Declaración de matriz (se inicializa con ceros recursivamente)
var matrix [3][3]int

// 2. Llenado usando FOR anidado (Ciclos + Arreglos)
fmt.Println("Llenando matriz...")
for var i int = 0; i < len(matrix); i++ {
    for var j int = 0; j < len(matrix[0]); j++ {
        // Asignamos valor: fila + columna
        matrix[i][j] = i + j
    }
}

// 3. Imprimir diagonal principal
fmt.Println("Diagonal Principal:")
for var k int = 0; k < 3; k++ {
    fmt.Println("matrix[", k, "][", k, "] =", matrix[k][k])
}

// 4. Prueba de acceso directo
matrix[0][2] = 99
fmt.Println("Valor modificado en [0][2]:", matrix[0][2])

// 5. Array Literal Anidado (Opcional, si tu parser de literal ya lo soporta)
// Nota: La gramática actual requiere el tipo explícito en cada nivel
var vector [2][2]int = [2][2]int{ 
    [2]int{10, 20}, 
    [2]int{30, 40} 
}
fmt.Println("Literal anidado [1][0]:", vector[1][0])
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
