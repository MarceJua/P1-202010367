<?php
// --- CONFIGURACIÓN ---
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use App\Compiler\GolampiLexer;
use App\Compiler\GolampiParser;
use App\Visitor;
use App\CustomErrorListener;
use App\ErrorManager;
use App\Environment;

// ==========================================================
//        PRUEBA DE ROBUSTEZ: ERRORES INTENCIONALES
// ==========================================================
$input = '
func main() {
    fmt.Println(">>> TEST DE ERRORES <<<")

    // 1. Error Semántico: Variable no definida
    fmt.Println(variableFantasma)

    // 2. Error Semántico: Re-declaración de variable
    var x int = 10
    var x int = 20  // ¡Error! Ya existe

    // 3. Error Semántico: Tipos incompatibles
    var numero int = "Soy una cadena" 

    // 4. Error Léxico: Caracter inválido ($ no existe en Golampi)
    var dinero int = 100 $ 

    // 5. Error Sintáctico: Falta el valor asignado
    var incompleta int = ;

    fmt.Println("Si ves esto, el compilador sobrevivió a los errores.")
}
';

// Limpieza previa
ErrorManager::limpiar();
Environment::limpiarReporte();

try {
    $inputStream = InputStream::fromString($input);
    $lexer = new GolampiLexer($inputStream);

    // Conectar Listener Léxico
    $lexer->removeErrorListeners();
    $lexer->addErrorListener(new CustomErrorListener());

    $tokens = new CommonTokenStream($lexer);
    $parser = new GolampiParser($tokens);

    // Conectar Listener Sintáctico
    $parser->removeErrorListeners();
    $parser->addErrorListener(new CustomErrorListener());

    // Parsear
    $tree = $parser->file();

    // Ejecutar Visitor (Modo Resiliente)
    // Nota: Si el árbol es muy defectuoso (null), no ejecutamos visitor para evitar crash de PHP
    if ($tree !== null) {
        $visitor = new Visitor();
        $visitor->visit($tree);
    }

    // --- REPORTES ---

    // 1. Tabla de Símbolos (Para ver qué variables sí se lograron crear)
    echo "\n\n=== REPORTE DE TABLA DE SÍMBOLOS ===\n";
    printf("%-15s | %-15s | %-15s | %-20s | %s\n", "ID", "TIPO", "AMBITO", "VALOR", "POS");
    echo str_repeat("-", 80) . "\n";
    foreach (\App\Environment::$reporte as $row) {
        printf(
            "%-15s | %-15s | %-15s | %-20s | %d:%d\n",
            $row['id'],
            substr($row['tipo'], 0, 15),
            substr($row['ambito'], 0, 15),
            substr($row['valor'], 0, 20),
            $row['linea'],
            $row['columna']
        );
    }

    // 2. Reporte de Errores (¡LO IMPORTANTE AHORA!)
    echo "\n\n=== REPORTE DE ERRORES ===\n";
    if (ErrorManager::hayErrores()) {
        printf("%-15s | %-10s | %-50s\n", "TIPO", "POSICIÓN", "DESCRIPCIÓN");
        echo str_repeat("-", 80) . "\n";
        foreach (ErrorManager::getErrores() as $err) {
            printf(
                "%-15s | %d:%d      | %s\n",
                $err['tipo'],
                $err['linea'],
                $err['col'],
                substr($err['desc'], 0, 50) // Cortamos descripción larga
            );
        }
    } else {
        echo "¡Increíble! No se encontraron errores (¿Algo falló en el test?).\n";
    }
} catch (\Throwable $e) {
    echo "\n ERROR CRÍTICO DEL SISTEMA:\n" . $e->getMessage() . "\n";
}
