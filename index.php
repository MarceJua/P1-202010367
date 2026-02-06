<?php

require __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Compiler\GolampiLexer;
use App\Compiler\GolampiParser;
use App\Visitor; // Importante: Cargar tu Visitor

// Código de prueba Fase 3
$input = '
fmt.Println("--- Test For Clásico ---")
// Imprimir pares del 0 al 4
for var i int = 0; i < 5; i++ {
    if i % 2 == 0 {
        fmt.Println("Par:", i)
    }
}

fmt.Println("--- Test While y Break ---")
var cont int = 10
for cont > 0 {
    fmt.Println("Countdown:", cont)
    cont -= 1 // Probando el -=
    
    if cont == 7 {
        fmt.Println("¡Abortando misión en 7!")
        break
    }
}
';

$inputStream = InputStream::fromString($input);
$lexer = new GolampiLexer($inputStream);
$tokens = new CommonTokenStream($lexer);
$parser = new GolampiParser($tokens);

// Construir el árbol
$tree = $parser->file();
$visitor = new Visitor();
$visitor->visit($tree);
