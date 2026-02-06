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
/* PRUEBA DE INTEGRACIÓN FINAL
   Comentario Multi-línea: OK
*/

// 1. Tipos Nuevos y Constantes
const PI float32 = 3.1416
var letra rune = \'@\'

// 2. Función con Múltiples Retornos
func calcular(a int, b int) (int, int) {
    return a + b, a * b
}

func main() {
    fmt.Println(">>> INICIO SYSTEM CHECK <<<")

    // 3. Declaración Corta (Short Decl) e Inferencia
    mensaje := "Hola Golampi"  // Infiere string
    x, y := 10, 20             // Múltiple
    
    fmt.Println(mensaje)
    fmt.Println("Valores iniciales:", x, y)

    // 4. Múltiples Retornos + Short Decl
    suma, multi := calcular(x, y)
    fmt.Println("Suma:", suma, "| Multi:", multi)

    // 5. Valor NIL y Validación
    // Golampi dice: Operación con nil es error o da nil.
    // var nulo *int = nil
    // fmt.Println("Valor nulo:", nulo) 

    // 6. Prueba Rune y Float
    fmt.Println("Rune:", letra)
    fmt.Println("Float Constante:", PI)

    // 7. Re-declaración corta (validar que una sea nueva)
    // x ya existe, pero z es nueva -> DEBE FUNCIONAR
    x, z := 50, 100 
    fmt.Println("x actualizado:", x, "| z nuevo:", z)
    
    fmt.Println(">>> SYSTEM CHECK COMPLETADO <<<")
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
