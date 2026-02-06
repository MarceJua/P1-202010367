<?php

require __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Compiler\GolampiLexer;
use App\Compiler\GolampiParser;

// Código de prueba "Hardcoded" para probar Fase 1
$input = '
// Comentario de prueba
fmt.Println("Hola Mundo", 2026)
';

$inputStream = InputStream::fromString($input);
$lexer = new GolampiLexer($inputStream);
$tokens = new CommonTokenStream($lexer);
$parser = new GolampiParser($tokens);

// Intentar parsear con la regla inicial
$tree = $parser->file();

echo "¡Análisis completado sin errores fatales!\n";
echo "Árbol: " . $tree->toStringTree($parser->getRuleNames()) . "\n";
