La sintaxis del lenguaje Golampi ha sido definida formalmente utilizando una gramática libre de contexto (G4), procesada por la herramienta ANTLR4. A continuación, se presenta la especificación en notación EBNF (Extended Backus-Naur Form).

> **Nota:** Para mayor claridad, se han omitido las reglas léxicas triviales (como espacios en blanco `WS` y comentarios `COMMENT`), así como los fragmentos de código de implementación específicos del parser.

## 2.1. Estructura General

Un programa en Golampi se define como una secuencia de instrucciones que culmina con el fin del archivo.

    file ::= instruction* EOF

## 2.2. Instrucciones (Statements)

Las instrucciones son los bloques constructivos del lenguaje. Pueden ser declaraciones, estructuras de control, asignaciones o expresiones sueltas.

    `instruction ::=
        | funcDecl                      /* Declaración de funciones */
        | printStmt                     /* Salida en consola */
        | varDecl                       /* Declaración de variables (var) */
        | constDecl                     /* Declaración de constantes (const) */
        | shortVarDecl                  /* Declaración corta (:=) */
        | assignStmt stmtTerminator     /* Asignaciones e incrementos */
        | ifStmt                        /* Estructura condicional */
        | switchStmt                    /* Estructura de selección múltiple */
        | forStmt                       /* Ciclos */
        | breakStmt                     /* Sentencia de ruptura */
        | continueStmt                  /* Sentencia de continuación */
        | returnStmt                    /* Retorno de función */
        | exprStmt                      /* Expresiones como sentencias */
        | block                         /* Bloque de código anidado */
        | NEWLINE                       /* Líneas vacías */

    stmtTerminator ::= ';' | NEWLINE | EOF
    block          ::= '{' instruction* '}'`

## 2.3. Definición de Tipos

Golampi es un lenguaje de tipado estático que soporta tipos primitivos, punteros y arreglos de dimensión fija.

    `type ::=
        | 'int' | 'int32'       /* Enteros de 32 bits */
        | 'float32'             /* Punto flotante */
        | 'string'              /* Cadenas de texto */
        | 'bool'                /* Booleanos */
        | 'rune'                /* Caracteres Unicode */
        | '*' type              /* Punteros a un tipo */
        | '[' INT ']' type      /* Arreglos de tamaño fijo */`

## 2.4. Estructuras de Control y Funciones

Definición de la sintaxis para el flujo de control y la modularización.

    `/* Funciones */
    funcDecl ::= 'func' ID '(' paramList? ')' typeList? block
    paramList ::= param (',' param)*
    param     ::= ID type
    typeList  ::= type | '(' type (',' type)* ')'  /* Soporte multi-retorno */

    /* Condicional */
    ifStmt ::= 'if' expression block ('else' (block | ifStmt))?

    /* Ciclos (3 Variantes) */
    forStmt ::=
        | 'for' varDecl expression ';' assignStmt block  /* Clásico */
        | 'for' expression block                         /* Tipo While */
        | 'for' block                                    /* Infinito */

    /* Selección Múltiple */
    switchStmt ::= 'switch' expression '{' switchCase* '}'
    switchCase ::=
        | 'case' expressionList ':' instruction*
        | 'default' ':' instruction*`

## 2.5. Declaraciones y Asignaciones

Reglas para la gestión de memoria y actualización de valores.

    varDecl      ::= 'var' ID type ('=' expression)? stmtTerminator
    constDecl    ::= 'const' ID type '=' expression stmtTerminator
    shortVarDecl ::= idList ':=' expressionList stmtTerminator

    assignStmt ::=
        | '*' ID '=' expression                                     /* Asignación a Puntero */
        | ID ('=' | '+=' | '-=' | '*=' | '/=') expression           /* Asignación Variable */
        | expression '[' expression ']' ('=' | '+=' | ...) expression /* Asignación Array */
        | ID ('++' | '--')                                          /* Incremento/Decremento */

## 2.6. Expresiones y Precedencia

Las expresiones manejan la lógica, aritmética y acceso a datos. La precedencia de operadores se define de mayor a menor prioridad según el siguiente orden:

1. **Primarios y Unarios:**
   - Literales (`INT`, `FLOAT`, `RUNE`, `STRING`, `BOOL`, `NIL`)
   - Identificadores (`ID`)
   - Agrupación `( expression )`
   - Acceso a Arreglos `[ expression ]`
   - Llamadas a Función `ID( args )`
   - Literales de Arreglo `type { ... }`
   - Negación Lógica `!`
   - Negación Aritmética (Unario)
   - Dirección de memoria `&` (Referencia)
   - Valor apuntado (Desreferencia)
2. **Multiplicativos:** , `/`, `%`
3. **Aditivos:** `+`,
4. **Relacionales:** `<`, `<=`, `>`, `>=`
5. **Igualdad:** `==`, `!=`
6. **Lógica AND:** `&&`
7. **Lógica OR:** `||`

## 2. Diagrama de Clases (Arquitectura)

El proyecto utiliza el patrón de diseño **Visitor** para recorrer el Árbol de Sintaxis Abstracta (AST) generado por ANTLR.

## 3. Flujo de Procesamiento (Tabla de Símbolos)

Este diagrama explica cómo el código fuente se convierte en ejecución y cómo se llena la tabla de símbolos.
