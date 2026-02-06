<?php

require __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Compiler\GolampiLexer;
use App\Compiler\GolampiParser;
use App\Visitor; // Importante: Cargar tu Visitor

// Código de prueba Fase 3
$input = '
var x int = 10
var global string = "Soy Global"

fmt.Println("Inicio del programa. x vale:", x)

if x > 5 {
    fmt.Println("Entrando al bloque IF...")
    var local string = "Soy Local del If"
    
    // Mostramos variables
    fmt.Println(global)
    fmt.Println(local)
    
    // Modificamos variable externa
    x = 20
} else {
    fmt.Println("Esto no debería imprimirse")
}

fmt.Println("Fuera del IF. x vale:", x)

// Esto debería dar error si descomentas la línea (porque "local" ya no existe):
 fmt.Println(local)
';

$inputStream = InputStream::fromString($input);
$lexer = new GolampiLexer($inputStream);
$tokens = new CommonTokenStream($lexer);
$parser = new GolampiParser($tokens);

// Construir el árbol
$tree = $parser->file();
$visitor = new Visitor();
$visitor->visit($tree);
