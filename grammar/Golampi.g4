grammar Golampi;

// --- PARSER (Reglas Sintácticas) ---

file: instruction* EOF;

instruction: printStmt | varDecl | assignStmt | ifStmt | block;

block: '{' instruction* '}';

ifStmt:
	'if' expression block ('else' (block | ifStmt))? # IfStatement;

printStmt: 'fmt.Println' '(' expressionList? ')' stmtTerminator;

varDecl:
	'var' ID type ('=' expression)? stmtTerminator # VarDeclaration;

assignStmt: ID '=' expression stmtTerminator # Assignment;

expressionList: expression (',' expression)*;

expression:
	'!' expression											# NotExpr
	| '-' expression										# UnaryMinusExpr
	| expression op = ('*' | '/' | '%') expression			# MulDivExpr
	| expression op = ('+' | '-') expression				# AddSubExpr
	| expression op = ('<' | '<=' | '>' | '>=') expression	# RelExpr
	| expression op = ('==' | '!=') expression				# EqExpr
	| expression '&&' expression							# AndExpr
	| expression '||' expression							# OrExpr
	| '(' expression ')'									# ParenExpr
	| ID													# IdExpr
	| INT													# IntExpr
	| STRING												# StrExpr
	| BOOL													# BoolExpr;
type: 'int' | 'int32' | 'string' | 'bool';

stmtTerminator: ';' | NEWLINE | EOF;

// --- LEXER ---

// Palabras reservadas
VAR: 'var';
FMT: 'fmt.Println';
IF: 'if';
ELSE: 'else';

// Tipos
TYPE_INT: 'int' | 'int32';
TYPE_STRING: 'string';
TYPE_BOOL: 'bool';

BOOL: 'true' | 'false';
ID: [a-zA-Z_] [a-zA-Z0-9_]*;
INT: [0-9]+;
STRING: '"' ~["]* '"';

// Comentarios y Espacios
COMMENT: '//' ~[\r\n]* -> skip;
WS: [ \t]+ -> skip;
NEWLINE: [\r\n]+;