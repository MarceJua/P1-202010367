grammar Golampi;

// --- PARSER (Reglas Sintácticas) ---

// El archivo debe tener al menos una instrucción o estar vacío
file: instruction* EOF;

instruction:
	printStmt
	; // Aquí iremos agregando if, for, declaraciones, etc.

printStmt: 'fmt.Println' '(' expressionList? ')' stmtTerminator;

expressionList: expression (',' expression)*;

expression: ID # IdExpr | INT # IntExpr | STRING # StrExpr;

stmtTerminator: ';' | NEWLINE | EOF;

// --- LEXER (Reglas Léxicas - Generalidades Sección 3.2) ---

// Palabras Reservadas (Case Sensitive)
VAR: 'var';
INT_TYPE: 'int32';
FMT: 'fmt.Println';

// Identificadores (Sección 3.2.1) Debe iniciar con letra o guion bajo, seguido de letras, dígitos o
// guion bajo.
ID: [a-zA-Z_] [a-zA-Z0-9_]*;

// Tipos de Datos (Sección 3.2.3)
INT: [0-9]+;
STRING: '"' ~["]* '"'; // Soporte básico de strings

// Comentarios (Sección 3.2.2) - Se ignoran (skip)
COMMENT: '//' ~[\r\n]* -> skip;

BLOCK_COMMENT: '/*' .*? '*/' -> skip;

// Espacios en blanco - Se ignoran
WS: [ \t]+ -> skip;

// Manejo de nuevas líneas (importante para "semicolon insertion" de Go, aunque aquí simplificamos)
NEWLINE: [\r\n]+;