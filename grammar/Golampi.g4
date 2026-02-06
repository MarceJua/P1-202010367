grammar Golampi;

// --- PARSER (Reglas Sintácticas) ---

file: instruction* EOF;

instruction:
	printStmt
	| varDecl
	| assignStmt
	| ifStmt
	| forStmt
	| breakStmt
	| continueStmt
	| block;

block: '{' instruction* '}';

ifStmt:
	'if' expression block ('else' (block | ifStmt))? # IfStatement;

forStmt:
	'for' varDecl expression ';' assignStmt block	# ForClassic
	| 'for' expression block						# ForWhile
	| 'for' block									# ForInfinite;

breakStmt: 'break' stmtTerminator;
continueStmt: 'continue' stmtTerminator;

printStmt: 'fmt.Println' '(' expressionList? ')' stmtTerminator;

varDecl:
	'var' ID type ('=' expression)? stmtTerminator # VarDeclaration;

assignStmt:
	ID op = ('=' | '+=' | '-=' | '*=' | '/=') expression stmtTerminator	# Assignment
	| ID op = ('++' | '--') stmtTerminator								# IncrementDecrement;

stmtTerminator: ';' | NEWLINE | EOF;

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

// --- LEXER ---

// Palabras reservadas
VAR: 'var';
FMT: 'fmt.Println';
IF: 'if';
ELSE: 'else';
FOR: 'for';
BREAK: 'break';
CONTINUE: 'continue';

//operadores
PLUS_ASSIGN: '+=';
MINUS_ASSIGN: '-=';
MUL_ASSIGN: '*=';
DIV_ASSIGN: '/=';
INC: '++';
DEC: '--';

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