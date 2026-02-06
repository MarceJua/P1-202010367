<?php

require __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Compiler\GolampiLexer;
use App\Compiler\GolampiParser;
use App\Visitor; // Importante: Cargar tu Visitor

// Código de prueba Fase 3
$input = '
var anioActual int = 2026
var nacimiento int = 2000
var edad int = anioActual - nacimiento

fmt.Println("Datos del usuario:")
fmt.Println("Edad calculada:", edad)
fmt.Println("En 5 años tendrás:", edad + 5)

// Prueba de re-asignación
edad = 100
fmt.Println("Nueva edad:", edad)
';

$inputStream = InputStream::fromString($input);
$lexer = new GolampiLexer($inputStream);
$tokens = new CommonTokenStream($lexer);
$parser = new GolampiParser($tokens);

// Construir el árbol
$tree = $parser->file();
$visitor = new Visitor();
$visitor->visit($tree);
