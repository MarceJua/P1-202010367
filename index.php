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
// 1. Variable Global
var titulo string = "--- EJECUCIÓN FINAL GOLAMPI ---"

// 2. Función Recursiva (Factorial)
func factorial(n int) int {
    if n <= 1 {
        return 1
    }
    return n * factorial(n - 1)
}

// 3. Función con Punteros (Referencia)
func duplicar(p *int) {
    *p = *p * 2
}

// 4. Función Principal (Punto de entrada)
func main() {
    fmt.Println(titulo)
    
    // Prueba de Factorial
    var num int = 5
    var fact int = factorial(num)
    fmt.Println("El factorial de", num, "es:", fact)
    
    // Prueba de Punteros
    fmt.Println("Valor original de num:", num)
    duplicar(&num)
    fmt.Println("Valor duplicado (por referencia):", num)
    
    // Prueba de Array y Ciclo
    var lista [3]string = [3]string{"Proyecto", "Final", "Listo"}
    fmt.Println("Mensaje desde Array:")
    
    for var i int = 0; i < len(lista); i++ {
        fmt.Println("-", lista[i])
    }
    
    fmt.Println(">>> FIN DEL PROGRAMA <<<")
}
';

try {
    $inputStream = InputStream::fromString($input);
    $lexer = new GolampiLexer($inputStream);
    $tokens = new CommonTokenStream($lexer);
    $parser = new GolampiParser($tokens);
    $tree = $parser->file();

    if ($tree === null) {
        echo "Error Crítico: El parser falló.\n";
        exit(1);
    }

    $visitor = new Visitor();
    $visitor->visit($tree);
} catch (\Throwable $e) {
    echo "\n ERROR EN EJECUCIÓN:\n" . $e->getMessage() . "\n";
}
