grammar Golampi;

// --- PARSER (Reglas Sintácticas) ---

file: instruction* EOF;

instruction:
	printStmt
	| varDecl // Nueva regla: Declaración (var x int = 10)
	| assignStmt; // Nueva regla: Asignación (x = 20)

printStmt: 'fmt.Println' '(' expressionList? ')' stmtTerminator;

// Declaración estándar: var x int = 10;
varDecl:
	'var' ID type ('=' expression)? stmtTerminator # VarDeclaration;

// Asignación: x = 10;
assignStmt: ID '=' expression stmtTerminator # Assignment;

expressionList: expression (',' expression)*;

expression:
	expression op = ('*' | '/' | '%') expression	# MulDivExpr
	| expression op = ('+' | '-') expression		# AddSubExpr
	| '(' expression ')'							# ParenExpr
	| ID											# IdExpr
	| INT											# IntExpr
	| STRING										# StrExpr
	| BOOL											# BoolExpr;

type: 'int' | 'int32' | 'string' | 'bool';

stmtTerminator: ';' | NEWLINE | EOF;

// --- LEXER ---

// Palabras reservadas
VAR: 'var';
FMT: 'fmt.Println';

// Tipos
TYPE_INT: 'int' | 'int32';
TYPE_STRING: 'string';
TYPE_BOOL: 'bool';

// Valores booleanos
BOOL: 'true' | 'false';

// Identificadores y Valores
ID: [a-zA-Z_] [a-zA-Z0-9_]*;
INT: [0-9]+;
STRING: '"' ~["]* '"';

// Comentarios y Espacios
COMMENT: '//' ~[\r\n]* -> skip;
WS: [ \t]+ -> skip;
NEWLINE: [\r\n]+;