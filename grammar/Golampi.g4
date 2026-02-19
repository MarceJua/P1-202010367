grammar Golampi;

// --- PARSER (Reglas Sintácticas) ---

file: instruction* EOF;

instruction:
	funcDecl
	| printStmt
	| varDecl
	| constDecl
	| shortVarDecl
	| assignStmt stmtTerminator
	| ifStmt
	| switchStmt
	| forStmt
	| breakStmt
	| continueStmt
	| returnStmt
	| exprStmt
	| block
	| NEWLINE;

block: '{' instruction* '}';

// --- FUNCIONES ---

// func suma(a int, b int) int { ... }
funcDecl:
	'func' ID '(' paramList? ')' (typeList)? block # FuncDeclaration;

paramList: param (',' param)*;

param: ID type # ParamDef;

// Lista de tipos de retorno (puede ser uno o varios, o ninguno)
typeList: type | '(' type (',' type)* ')';

returnStmt: 'return' expressionList? stmtTerminator;

// Llamada a función como instrucción (sin asignar valor)
exprStmt: expression stmtTerminator;

ifStmt:
	'if' expression block ('else' (block | ifStmt))?	# IfStatement
	| 'if' expression instruction ('else' instruction)?	# IfStatementSingle;

forStmt:
	'for' forInit ';' expression ';' forPost block	# ForClassic
	| 'for' expression block						# ForWhile
	| 'for' block									# ForInfinite;

forInit:
	'var' ID type ('=' expression)?	# ForVarDecl
	| assignStmt					# ForAssign
	|								# ForEmpty;

forPost: assignStmt # ForPostAssign | # ForPostEmpty;

switchStmt:
	'switch' expression '{' switchCase* '}' # SwitchStatement;

switchCase:
	'case' expressionList ':' instruction*	# CaseBlock
	| 'default' ':' instruction*			# DefaultBlock;

breakStmt: 'break' stmtTerminator;
continueStmt: 'continue' stmtTerminator;

printStmt: 'fmt.Println' '(' expressionList? ')' stmtTerminator;

varDecl:
	'var' ID type ('=' expression)? stmtTerminator # VarDeclaration;

constDecl:
	'const' ID type '=' expression stmtTerminator # ConstDeclaration;

shortVarDecl:
	idList ':=' expressionList stmtTerminator # ShortVarDeclaration;

idList: ID (',' ID)*;

assignStmt:
	'*' ID '=' expression									# PtrAssignment
	| ID op = ('=' | '+=' | '-=' | '*=' | '/=') expression	# Assignment
	| expression '[' expression ']' op = (
		'='
		| '+='
		| '-='
		| '*='
		| '/='
	) expression			# ArrayAssignment
	| ID op = ('++' | '--')	# IncrementDecrement;

stmtTerminator: ';' | NEWLINE | EOF;

expressionList: expression (',' expression)*;

expression:
	'!' expression											# NotExpr
	| '-' expression										# UnaryMinusExpr
	| '&' ID												# AddressOfExpr
	| '*' expression										# DerefExpr
	| expression op = ('*' | '/' | '%') expression			# MulDivExpr
	| expression op = ('+' | '-') expression				# AddSubExpr
	| expression op = ('<' | '<=' | '>' | '>=') expression	# RelExpr
	| expression op = ('==' | '!=') expression				# EqExpr
	| expression '&&' expression							# AndExpr
	| expression '||' expression							# OrExpr
	| type '{' expressionList? '}'							# ArrayLiteral
	| ID '(' expressionList? ')'							# CallExpr
	| expression '[' expression ']'							# ArrayAccessExpr
	| '(' expression ')'									# ParenExpr
	| ID													# IdExpr
	| FLOAT													# FloatExpr
	| RUNE													# RuneExpr
	| NIL													# NilExpr
	| INT													# IntExpr
	| STRING												# StrExpr
	| BOOL													# BoolExpr;

type:
	'int'
	| 'int32'
	| 'float32'
	| 'string'
	| 'bool'
	| 'rune'
	| '*' type
	| '[' INT ']' type;

// --- LEXER ---

// Palabras reservadas
VAR: 'var';
FMT: 'fmt.Println';
IF: 'if';
ELSE: 'else';
FOR: 'for';
BREAK: 'break';
CONTINUE: 'continue';
FUNC: 'func';
RETURN: 'return';
CONST: 'const';
SWITCH: 'switch';
CASE: 'case';
DEFAULT: 'default';

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
FLOAT: [0-9]+ '.' [0-9]+;
RUNE: '\'' ( '\\' . | ~['\\]) '\'';
NIL: 'nil';
INT: [0-9]+;
STRING: '"' ( '\\' . | ~["\\])* '"';

// Comentarios y Espacios
COMMENT_MULTI: '/*' .*? '*/' -> skip;
COMMENT: '//' ~[\r\n]* -> skip;
WS: [ \t]+ -> skip;
NEWLINE: [\r\n]+;