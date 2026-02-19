<?php

require __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Compiler\GolampiLexer;
use App\Compiler\GolampiParser;
use App\Visitor;
use App\CustomErrorListener;
use App\ErrorManager;
use App\Environment;

// Configuración de Cabeceras para permitir peticiones web
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// 1. Recibir el código del frontend
$inputJSON = file_get_contents('php://input');
$data = json_decode($inputJSON, true);
$input = $data['codigo'] ?? '';

$response = [
    'output' => '',
    'errores' => [],
    'simbolos' => [],
    'ast' => ''
];

// Si viene vacío, retornamos vacío
if (empty($input)) {
    echo json_encode($response);
    exit;
}

// 2. Limpieza
ErrorManager::limpiar();
Environment::limpiarReporte();

// 3. Capturar salida (Buffer)
ob_start();

try {
    $inputStream = InputStream::fromString($input);
    $lexer = new GolampiLexer($inputStream);

    $lexer->removeErrorListeners();
    $lexer->addErrorListener(new CustomErrorListener());

    $tokens = new CommonTokenStream($lexer);
    $parser = new GolampiParser($tokens);

    $parser->removeErrorListeners();
    $parser->addErrorListener(new CustomErrorListener());

    $tree = $parser->file();

    // Solo ejecutamos si el árbol es mínimamente válido
    if ($tree !== null) {
        $visitor = new Visitor();
        $visitor->visit($tree);
        $response['ast'] = $tree->toStringTree($parser->getRuleNames());
    }
} catch (\Throwable $e) {
    echo "\n ERROR CRÍTICO DEL SERVIDOR:\n" . $e->getMessage();
}

$consoleOutput = ob_get_clean();

// 4. Enviar respuesta JSON
$response['output'] = $consoleOutput;
$response['errores'] = ErrorManager::getErrores();
$response['simbolos'] = Environment::$reporte;

echo json_encode($response);
