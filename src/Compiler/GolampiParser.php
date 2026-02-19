<?php

/*
 * Generated from grammar/Golampi.g4 by ANTLR 4.13.1
 */

namespace App\Compiler {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GolampiParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, VAR = 31, FMT = 32, IF = 33, 
               ELSE = 34, FOR = 35, BREAK = 36, CONTINUE = 37, FUNC = 38, 
               RETURN = 39, CONST = 40, SWITCH = 41, CASE = 42, DEFAULT = 43, 
               PLUS_ASSIGN = 44, MINUS_ASSIGN = 45, MUL_ASSIGN = 46, DIV_ASSIGN = 47, 
               INC = 48, DEC = 49, TYPE_INT = 50, TYPE_STRING = 51, TYPE_BOOL = 52, 
               BOOL = 53, ID = 54, FLOAT = 55, RUNE = 56, NIL = 57, INT = 58, 
               STRING = 59, COMMENT_MULTI = 60, COMMENT = 61, WS = 62, NEWLINE = 63;

		public const RULE_file = 0, RULE_instruction = 1, RULE_block = 2, RULE_funcDecl = 3, 
               RULE_paramList = 4, RULE_param = 5, RULE_typeList = 6, RULE_returnStmt = 7, 
               RULE_exprStmt = 8, RULE_ifStmt = 9, RULE_forStmt = 10, RULE_forInit = 11, 
               RULE_forPost = 12, RULE_switchStmt = 13, RULE_switchCase = 14, 
               RULE_breakStmt = 15, RULE_continueStmt = 16, RULE_printStmt = 17, 
               RULE_varDecl = 18, RULE_constDecl = 19, RULE_shortVarDecl = 20, 
               RULE_idList = 21, RULE_assignStmt = 22, RULE_stmtTerminator = 23, 
               RULE_expressionList = 24, RULE_expression = 25, RULE_type = 26;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'file', 'instruction', 'block', 'funcDecl', 'paramList', 'param', 'typeList', 
			'returnStmt', 'exprStmt', 'ifStmt', 'forStmt', 'forInit', 'forPost', 
			'switchStmt', 'switchCase', 'breakStmt', 'continueStmt', 'printStmt', 
			'varDecl', 'constDecl', 'shortVarDecl', 'idList', 'assignStmt', 'stmtTerminator', 
			'expressionList', 'expression', 'type'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'{'", "'}'", "'('", "')'", "','", "';'", "'='", "':'", "':='", 
		    "'*'", "'['", "']'", "'!'", "'-'", "'&'", "'/'", "'%'", "'+'", "'<'", 
		    "'<='", "'>'", "'>='", "'=='", "'!='", "'&&'", "'||'", "'int'", "'int32'", 
		    "'float32'", "'rune'", "'var'", "'fmt.Println'", "'if'", "'else'", 
		    "'for'", "'break'", "'continue'", "'func'", "'return'", "'const'", 
		    "'switch'", "'case'", "'default'", "'+='", "'-='", "'*='", "'/='", 
		    "'++'", "'--'", null, "'string'", "'bool'", null, null, null, null, 
		    "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, "VAR", "FMT", 
		    "IF", "ELSE", "FOR", "BREAK", "CONTINUE", "FUNC", "RETURN", "CONST", 
		    "SWITCH", "CASE", "DEFAULT", "PLUS_ASSIGN", "MINUS_ASSIGN", "MUL_ASSIGN", 
		    "DIV_ASSIGN", "INC", "DEC", "TYPE_INT", "TYPE_STRING", "TYPE_BOOL", 
		    "BOOL", "ID", "FLOAT", "RUNE", "NIL", "INT", "STRING", "COMMENT_MULTI", 
		    "COMMENT", "WS", "NEWLINE"
		];

		private const SERIALIZED_ATN =
			[4, 1, 63, 365, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 1, 0, 5, 0, 56, 8, 0, 10, 0, 
		    12, 0, 59, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 
		    1, 80, 8, 1, 1, 2, 1, 2, 5, 2, 84, 8, 2, 10, 2, 12, 2, 87, 9, 2, 1, 
		    2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 3, 3, 95, 8, 3, 1, 3, 1, 3, 3, 3, 
		    99, 8, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 5, 4, 106, 8, 4, 10, 4, 12, 
		    4, 109, 9, 4, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 5, 6, 
		    119, 8, 6, 10, 6, 12, 6, 122, 9, 6, 1, 6, 1, 6, 3, 6, 126, 8, 6, 1, 
		    7, 1, 7, 3, 7, 130, 8, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 
		    1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 143, 8, 9, 3, 9, 145, 8, 9, 1, 9, 1, 
		    9, 1, 9, 1, 9, 1, 9, 3, 9, 152, 8, 9, 3, 9, 154, 8, 9, 1, 10, 1, 10, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 
		    10, 1, 10, 1, 10, 3, 10, 170, 8, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 
		    11, 3, 11, 177, 8, 11, 1, 11, 1, 11, 3, 11, 181, 8, 11, 1, 12, 1, 
		    12, 3, 12, 185, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 5, 13, 191, 8, 
		    13, 10, 13, 12, 13, 194, 9, 13, 1, 13, 1, 13, 1, 14, 1, 14, 1, 14, 
		    1, 14, 5, 14, 202, 8, 14, 10, 14, 12, 14, 205, 9, 14, 1, 14, 1, 14, 
		    1, 14, 5, 14, 210, 8, 14, 10, 14, 12, 14, 213, 9, 14, 3, 14, 215, 
		    8, 14, 1, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 
		    17, 3, 17, 226, 8, 17, 1, 17, 1, 17, 1, 17, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 3, 18, 236, 8, 18, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 21, 
		    1, 21, 1, 21, 5, 21, 255, 8, 21, 10, 21, 12, 21, 258, 9, 21, 1, 22, 
		    1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 
		    22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 3, 22, 276, 8, 22, 1, 23, 1, 
		    23, 1, 24, 1, 24, 1, 24, 5, 24, 283, 8, 24, 10, 24, 12, 24, 286, 9, 
		    24, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 25, 1, 25, 1, 25, 3, 25, 300, 8, 25, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 25, 3, 25, 307, 8, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 3, 25, 321, 8, 25, 1, 25, 
		    1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 
		    25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 25, 1, 25, 1, 25, 5, 25, 346, 8, 25, 10, 25, 12, 25, 349, 9, 25, 
		    1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 
		    26, 1, 26, 1, 26, 3, 26, 363, 8, 26, 1, 26, 0, 1, 50, 27, 0, 2, 4, 
		    6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 
		    40, 42, 44, 46, 48, 50, 52, 0, 7, 2, 0, 7, 7, 44, 47, 1, 0, 48, 49, 
		    2, 1, 6, 6, 63, 63, 2, 0, 10, 10, 16, 17, 2, 0, 14, 14, 18, 18, 1, 
		    0, 19, 22, 1, 0, 23, 24, 409, 0, 57, 1, 0, 0, 0, 2, 79, 1, 0, 0, 0, 
		    4, 81, 1, 0, 0, 0, 6, 90, 1, 0, 0, 0, 8, 102, 1, 0, 0, 0, 10, 110, 
		    1, 0, 0, 0, 12, 125, 1, 0, 0, 0, 14, 127, 1, 0, 0, 0, 16, 133, 1, 
		    0, 0, 0, 18, 153, 1, 0, 0, 0, 20, 169, 1, 0, 0, 0, 22, 180, 1, 0, 
		    0, 0, 24, 184, 1, 0, 0, 0, 26, 186, 1, 0, 0, 0, 28, 214, 1, 0, 0, 
		    0, 30, 216, 1, 0, 0, 0, 32, 219, 1, 0, 0, 0, 34, 222, 1, 0, 0, 0, 
		    36, 230, 1, 0, 0, 0, 38, 239, 1, 0, 0, 0, 40, 246, 1, 0, 0, 0, 42, 
		    251, 1, 0, 0, 0, 44, 275, 1, 0, 0, 0, 46, 277, 1, 0, 0, 0, 48, 279, 
		    1, 0, 0, 0, 50, 320, 1, 0, 0, 0, 52, 362, 1, 0, 0, 0, 54, 56, 3, 2, 
		    1, 0, 55, 54, 1, 0, 0, 0, 56, 59, 1, 0, 0, 0, 57, 55, 1, 0, 0, 0, 
		    57, 58, 1, 0, 0, 0, 58, 60, 1, 0, 0, 0, 59, 57, 1, 0, 0, 0, 60, 61, 
		    5, 0, 0, 1, 61, 1, 1, 0, 0, 0, 62, 80, 3, 6, 3, 0, 63, 80, 3, 34, 
		    17, 0, 64, 80, 3, 36, 18, 0, 65, 80, 3, 38, 19, 0, 66, 80, 3, 40, 
		    20, 0, 67, 68, 3, 44, 22, 0, 68, 69, 3, 46, 23, 0, 69, 80, 1, 0, 0, 
		    0, 70, 80, 3, 18, 9, 0, 71, 80, 3, 26, 13, 0, 72, 80, 3, 20, 10, 0, 
		    73, 80, 3, 30, 15, 0, 74, 80, 3, 32, 16, 0, 75, 80, 3, 14, 7, 0, 76, 
		    80, 3, 16, 8, 0, 77, 80, 3, 4, 2, 0, 78, 80, 5, 63, 0, 0, 79, 62, 
		    1, 0, 0, 0, 79, 63, 1, 0, 0, 0, 79, 64, 1, 0, 0, 0, 79, 65, 1, 0, 
		    0, 0, 79, 66, 1, 0, 0, 0, 79, 67, 1, 0, 0, 0, 79, 70, 1, 0, 0, 0, 
		    79, 71, 1, 0, 0, 0, 79, 72, 1, 0, 0, 0, 79, 73, 1, 0, 0, 0, 79, 74, 
		    1, 0, 0, 0, 79, 75, 1, 0, 0, 0, 79, 76, 1, 0, 0, 0, 79, 77, 1, 0, 
		    0, 0, 79, 78, 1, 0, 0, 0, 80, 3, 1, 0, 0, 0, 81, 85, 5, 1, 0, 0, 82, 
		    84, 3, 2, 1, 0, 83, 82, 1, 0, 0, 0, 84, 87, 1, 0, 0, 0, 85, 83, 1, 
		    0, 0, 0, 85, 86, 1, 0, 0, 0, 86, 88, 1, 0, 0, 0, 87, 85, 1, 0, 0, 
		    0, 88, 89, 5, 2, 0, 0, 89, 5, 1, 0, 0, 0, 90, 91, 5, 38, 0, 0, 91, 
		    92, 5, 54, 0, 0, 92, 94, 5, 3, 0, 0, 93, 95, 3, 8, 4, 0, 94, 93, 1, 
		    0, 0, 0, 94, 95, 1, 0, 0, 0, 95, 96, 1, 0, 0, 0, 96, 98, 5, 4, 0, 
		    0, 97, 99, 3, 12, 6, 0, 98, 97, 1, 0, 0, 0, 98, 99, 1, 0, 0, 0, 99, 
		    100, 1, 0, 0, 0, 100, 101, 3, 4, 2, 0, 101, 7, 1, 0, 0, 0, 102, 107, 
		    3, 10, 5, 0, 103, 104, 5, 5, 0, 0, 104, 106, 3, 10, 5, 0, 105, 103, 
		    1, 0, 0, 0, 106, 109, 1, 0, 0, 0, 107, 105, 1, 0, 0, 0, 107, 108, 
		    1, 0, 0, 0, 108, 9, 1, 0, 0, 0, 109, 107, 1, 0, 0, 0, 110, 111, 5, 
		    54, 0, 0, 111, 112, 3, 52, 26, 0, 112, 11, 1, 0, 0, 0, 113, 126, 3, 
		    52, 26, 0, 114, 115, 5, 3, 0, 0, 115, 120, 3, 52, 26, 0, 116, 117, 
		    5, 5, 0, 0, 117, 119, 3, 52, 26, 0, 118, 116, 1, 0, 0, 0, 119, 122, 
		    1, 0, 0, 0, 120, 118, 1, 0, 0, 0, 120, 121, 1, 0, 0, 0, 121, 123, 
		    1, 0, 0, 0, 122, 120, 1, 0, 0, 0, 123, 124, 5, 4, 0, 0, 124, 126, 
		    1, 0, 0, 0, 125, 113, 1, 0, 0, 0, 125, 114, 1, 0, 0, 0, 126, 13, 1, 
		    0, 0, 0, 127, 129, 5, 39, 0, 0, 128, 130, 3, 48, 24, 0, 129, 128, 
		    1, 0, 0, 0, 129, 130, 1, 0, 0, 0, 130, 131, 1, 0, 0, 0, 131, 132, 
		    3, 46, 23, 0, 132, 15, 1, 0, 0, 0, 133, 134, 3, 50, 25, 0, 134, 135, 
		    3, 46, 23, 0, 135, 17, 1, 0, 0, 0, 136, 137, 5, 33, 0, 0, 137, 138, 
		    3, 50, 25, 0, 138, 144, 3, 4, 2, 0, 139, 142, 5, 34, 0, 0, 140, 143, 
		    3, 4, 2, 0, 141, 143, 3, 18, 9, 0, 142, 140, 1, 0, 0, 0, 142, 141, 
		    1, 0, 0, 0, 143, 145, 1, 0, 0, 0, 144, 139, 1, 0, 0, 0, 144, 145, 
		    1, 0, 0, 0, 145, 154, 1, 0, 0, 0, 146, 147, 5, 33, 0, 0, 147, 148, 
		    3, 50, 25, 0, 148, 151, 3, 2, 1, 0, 149, 150, 5, 34, 0, 0, 150, 152, 
		    3, 2, 1, 0, 151, 149, 1, 0, 0, 0, 151, 152, 1, 0, 0, 0, 152, 154, 
		    1, 0, 0, 0, 153, 136, 1, 0, 0, 0, 153, 146, 1, 0, 0, 0, 154, 19, 1, 
		    0, 0, 0, 155, 156, 5, 35, 0, 0, 156, 157, 3, 22, 11, 0, 157, 158, 
		    5, 6, 0, 0, 158, 159, 3, 50, 25, 0, 159, 160, 5, 6, 0, 0, 160, 161, 
		    3, 24, 12, 0, 161, 162, 3, 4, 2, 0, 162, 170, 1, 0, 0, 0, 163, 164, 
		    5, 35, 0, 0, 164, 165, 3, 50, 25, 0, 165, 166, 3, 4, 2, 0, 166, 170, 
		    1, 0, 0, 0, 167, 168, 5, 35, 0, 0, 168, 170, 3, 4, 2, 0, 169, 155, 
		    1, 0, 0, 0, 169, 163, 1, 0, 0, 0, 169, 167, 1, 0, 0, 0, 170, 21, 1, 
		    0, 0, 0, 171, 172, 5, 31, 0, 0, 172, 173, 5, 54, 0, 0, 173, 176, 3, 
		    52, 26, 0, 174, 175, 5, 7, 0, 0, 175, 177, 3, 50, 25, 0, 176, 174, 
		    1, 0, 0, 0, 176, 177, 1, 0, 0, 0, 177, 181, 1, 0, 0, 0, 178, 181, 
		    3, 44, 22, 0, 179, 181, 1, 0, 0, 0, 180, 171, 1, 0, 0, 0, 180, 178, 
		    1, 0, 0, 0, 180, 179, 1, 0, 0, 0, 181, 23, 1, 0, 0, 0, 182, 185, 3, 
		    44, 22, 0, 183, 185, 1, 0, 0, 0, 184, 182, 1, 0, 0, 0, 184, 183, 1, 
		    0, 0, 0, 185, 25, 1, 0, 0, 0, 186, 187, 5, 41, 0, 0, 187, 188, 3, 
		    50, 25, 0, 188, 192, 5, 1, 0, 0, 189, 191, 3, 28, 14, 0, 190, 189, 
		    1, 0, 0, 0, 191, 194, 1, 0, 0, 0, 192, 190, 1, 0, 0, 0, 192, 193, 
		    1, 0, 0, 0, 193, 195, 1, 0, 0, 0, 194, 192, 1, 0, 0, 0, 195, 196, 
		    5, 2, 0, 0, 196, 27, 1, 0, 0, 0, 197, 198, 5, 42, 0, 0, 198, 199, 
		    3, 48, 24, 0, 199, 203, 5, 8, 0, 0, 200, 202, 3, 2, 1, 0, 201, 200, 
		    1, 0, 0, 0, 202, 205, 1, 0, 0, 0, 203, 201, 1, 0, 0, 0, 203, 204, 
		    1, 0, 0, 0, 204, 215, 1, 0, 0, 0, 205, 203, 1, 0, 0, 0, 206, 207, 
		    5, 43, 0, 0, 207, 211, 5, 8, 0, 0, 208, 210, 3, 2, 1, 0, 209, 208, 
		    1, 0, 0, 0, 210, 213, 1, 0, 0, 0, 211, 209, 1, 0, 0, 0, 211, 212, 
		    1, 0, 0, 0, 212, 215, 1, 0, 0, 0, 213, 211, 1, 0, 0, 0, 214, 197, 
		    1, 0, 0, 0, 214, 206, 1, 0, 0, 0, 215, 29, 1, 0, 0, 0, 216, 217, 5, 
		    36, 0, 0, 217, 218, 3, 46, 23, 0, 218, 31, 1, 0, 0, 0, 219, 220, 5, 
		    37, 0, 0, 220, 221, 3, 46, 23, 0, 221, 33, 1, 0, 0, 0, 222, 223, 5, 
		    32, 0, 0, 223, 225, 5, 3, 0, 0, 224, 226, 3, 48, 24, 0, 225, 224, 
		    1, 0, 0, 0, 225, 226, 1, 0, 0, 0, 226, 227, 1, 0, 0, 0, 227, 228, 
		    5, 4, 0, 0, 228, 229, 3, 46, 23, 0, 229, 35, 1, 0, 0, 0, 230, 231, 
		    5, 31, 0, 0, 231, 232, 5, 54, 0, 0, 232, 235, 3, 52, 26, 0, 233, 234, 
		    5, 7, 0, 0, 234, 236, 3, 50, 25, 0, 235, 233, 1, 0, 0, 0, 235, 236, 
		    1, 0, 0, 0, 236, 237, 1, 0, 0, 0, 237, 238, 3, 46, 23, 0, 238, 37, 
		    1, 0, 0, 0, 239, 240, 5, 40, 0, 0, 240, 241, 5, 54, 0, 0, 241, 242, 
		    3, 52, 26, 0, 242, 243, 5, 7, 0, 0, 243, 244, 3, 50, 25, 0, 244, 245, 
		    3, 46, 23, 0, 245, 39, 1, 0, 0, 0, 246, 247, 3, 42, 21, 0, 247, 248, 
		    5, 9, 0, 0, 248, 249, 3, 48, 24, 0, 249, 250, 3, 46, 23, 0, 250, 41, 
		    1, 0, 0, 0, 251, 256, 5, 54, 0, 0, 252, 253, 5, 5, 0, 0, 253, 255, 
		    5, 54, 0, 0, 254, 252, 1, 0, 0, 0, 255, 258, 1, 0, 0, 0, 256, 254, 
		    1, 0, 0, 0, 256, 257, 1, 0, 0, 0, 257, 43, 1, 0, 0, 0, 258, 256, 1, 
		    0, 0, 0, 259, 260, 5, 10, 0, 0, 260, 261, 5, 54, 0, 0, 261, 262, 5, 
		    7, 0, 0, 262, 276, 3, 50, 25, 0, 263, 264, 5, 54, 0, 0, 264, 265, 
		    7, 0, 0, 0, 265, 276, 3, 50, 25, 0, 266, 267, 3, 50, 25, 0, 267, 268, 
		    5, 11, 0, 0, 268, 269, 3, 50, 25, 0, 269, 270, 5, 12, 0, 0, 270, 271, 
		    7, 0, 0, 0, 271, 272, 3, 50, 25, 0, 272, 276, 1, 0, 0, 0, 273, 274, 
		    5, 54, 0, 0, 274, 276, 7, 1, 0, 0, 275, 259, 1, 0, 0, 0, 275, 263, 
		    1, 0, 0, 0, 275, 266, 1, 0, 0, 0, 275, 273, 1, 0, 0, 0, 276, 45, 1, 
		    0, 0, 0, 277, 278, 7, 2, 0, 0, 278, 47, 1, 0, 0, 0, 279, 284, 3, 50, 
		    25, 0, 280, 281, 5, 5, 0, 0, 281, 283, 3, 50, 25, 0, 282, 280, 1, 
		    0, 0, 0, 283, 286, 1, 0, 0, 0, 284, 282, 1, 0, 0, 0, 284, 285, 1, 
		    0, 0, 0, 285, 49, 1, 0, 0, 0, 286, 284, 1, 0, 0, 0, 287, 288, 6, 25, 
		    -1, 0, 288, 289, 5, 13, 0, 0, 289, 321, 3, 50, 25, 21, 290, 291, 5, 
		    14, 0, 0, 291, 321, 3, 50, 25, 20, 292, 293, 5, 15, 0, 0, 293, 321, 
		    5, 54, 0, 0, 294, 295, 5, 10, 0, 0, 295, 321, 3, 50, 25, 18, 296, 
		    297, 3, 52, 26, 0, 297, 299, 5, 1, 0, 0, 298, 300, 3, 48, 24, 0, 299, 
		    298, 1, 0, 0, 0, 299, 300, 1, 0, 0, 0, 300, 301, 1, 0, 0, 0, 301, 
		    302, 5, 2, 0, 0, 302, 321, 1, 0, 0, 0, 303, 304, 5, 54, 0, 0, 304, 
		    306, 5, 3, 0, 0, 305, 307, 3, 48, 24, 0, 306, 305, 1, 0, 0, 0, 306, 
		    307, 1, 0, 0, 0, 307, 308, 1, 0, 0, 0, 308, 321, 5, 4, 0, 0, 309, 
		    310, 5, 3, 0, 0, 310, 311, 3, 50, 25, 0, 311, 312, 5, 4, 0, 0, 312, 
		    321, 1, 0, 0, 0, 313, 321, 5, 54, 0, 0, 314, 321, 5, 55, 0, 0, 315, 
		    321, 5, 56, 0, 0, 316, 321, 5, 57, 0, 0, 317, 321, 5, 58, 0, 0, 318, 
		    321, 5, 59, 0, 0, 319, 321, 5, 53, 0, 0, 320, 287, 1, 0, 0, 0, 320, 
		    290, 1, 0, 0, 0, 320, 292, 1, 0, 0, 0, 320, 294, 1, 0, 0, 0, 320, 
		    296, 1, 0, 0, 0, 320, 303, 1, 0, 0, 0, 320, 309, 1, 0, 0, 0, 320, 
		    313, 1, 0, 0, 0, 320, 314, 1, 0, 0, 0, 320, 315, 1, 0, 0, 0, 320, 
		    316, 1, 0, 0, 0, 320, 317, 1, 0, 0, 0, 320, 318, 1, 0, 0, 0, 320, 
		    319, 1, 0, 0, 0, 321, 347, 1, 0, 0, 0, 322, 323, 10, 17, 0, 0, 323, 
		    324, 7, 3, 0, 0, 324, 346, 3, 50, 25, 18, 325, 326, 10, 16, 0, 0, 
		    326, 327, 7, 4, 0, 0, 327, 346, 3, 50, 25, 17, 328, 329, 10, 15, 0, 
		    0, 329, 330, 7, 5, 0, 0, 330, 346, 3, 50, 25, 16, 331, 332, 10, 14, 
		    0, 0, 332, 333, 7, 6, 0, 0, 333, 346, 3, 50, 25, 15, 334, 335, 10, 
		    13, 0, 0, 335, 336, 5, 25, 0, 0, 336, 346, 3, 50, 25, 14, 337, 338, 
		    10, 12, 0, 0, 338, 339, 5, 26, 0, 0, 339, 346, 3, 50, 25, 13, 340, 
		    341, 10, 9, 0, 0, 341, 342, 5, 11, 0, 0, 342, 343, 3, 50, 25, 0, 343, 
		    344, 5, 12, 0, 0, 344, 346, 1, 0, 0, 0, 345, 322, 1, 0, 0, 0, 345, 
		    325, 1, 0, 0, 0, 345, 328, 1, 0, 0, 0, 345, 331, 1, 0, 0, 0, 345, 
		    334, 1, 0, 0, 0, 345, 337, 1, 0, 0, 0, 345, 340, 1, 0, 0, 0, 346, 
		    349, 1, 0, 0, 0, 347, 345, 1, 0, 0, 0, 347, 348, 1, 0, 0, 0, 348, 
		    51, 1, 0, 0, 0, 349, 347, 1, 0, 0, 0, 350, 363, 5, 27, 0, 0, 351, 
		    363, 5, 28, 0, 0, 352, 363, 5, 29, 0, 0, 353, 363, 5, 51, 0, 0, 354, 
		    363, 5, 52, 0, 0, 355, 363, 5, 30, 0, 0, 356, 357, 5, 10, 0, 0, 357, 
		    363, 3, 52, 26, 0, 358, 359, 5, 11, 0, 0, 359, 360, 5, 58, 0, 0, 360, 
		    361, 5, 12, 0, 0, 361, 363, 3, 52, 26, 0, 362, 350, 1, 0, 0, 0, 362, 
		    351, 1, 0, 0, 0, 362, 352, 1, 0, 0, 0, 362, 353, 1, 0, 0, 0, 362, 
		    354, 1, 0, 0, 0, 362, 355, 1, 0, 0, 0, 362, 356, 1, 0, 0, 0, 362, 
		    358, 1, 0, 0, 0, 363, 53, 1, 0, 0, 0, 32, 57, 79, 85, 94, 98, 107, 
		    120, 125, 129, 142, 144, 151, 153, 169, 176, 180, 184, 192, 203, 211, 
		    214, 225, 235, 256, 275, 284, 299, 306, 320, 345, 347, 362];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Golampi.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function file(): Context\FileContext
		{
		    $localContext = new Context\FileContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_file);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(57);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		        	$this->setState(54);
		        	$this->instruction();
		        	$this->setState(59);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(60);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function instruction(): Context\InstructionContext
		{
		    $localContext = new Context\InstructionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_instruction);

		    try {
		        $this->setState(79);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(62);
		        	    $this->funcDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(63);
		        	    $this->printStmt();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(64);
		        	    $this->varDecl();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(65);
		        	    $this->constDecl();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(66);
		        	    $this->shortVarDecl();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(67);
		        	    $this->assignStmt();
		        	    $this->setState(68);
		        	    $this->stmtTerminator();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(70);
		        	    $this->ifStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(71);
		        	    $this->switchStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(72);
		        	    $this->forStmt();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(73);
		        	    $this->breakStmt();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(74);
		        	    $this->continueStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(75);
		        	    $this->returnStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(76);
		        	    $this->exprStmt();
		        	break;

		        	case 14:
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(77);
		        	    $this->block();
		        	break;

		        	case 15:
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(78);
		        	    $this->match(self::NEWLINE);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(81);
		        $this->match(self::T__0);
		        $this->setState(85);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		        	$this->setState(82);
		        	$this->instruction();
		        	$this->setState(87);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(88);
		        $this->match(self::T__1);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcDecl(): Context\FuncDeclContext
		{
		    $localContext = new Context\FuncDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_funcDecl);

		    try {
		        $localContext = new Context\FuncDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(90);
		        $this->match(self::FUNC);
		        $this->setState(91);
		        $this->match(self::ID);
		        $this->setState(92);
		        $this->match(self::T__2);
		        $this->setState(94);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(93);
		        	$this->paramList();
		        }
		        $this->setState(96);
		        $this->match(self::T__3);
		        $this->setState(98);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 6755401454324744) !== 0)) {
		        	$this->setState(97);
		        	$this->typeList();
		        }
		        $this->setState(100);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function paramList(): Context\ParamListContext
		{
		    $localContext = new Context\ParamListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_paramList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(102);
		        $this->param();
		        $this->setState(107);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(103);
		        	$this->match(self::T__4);
		        	$this->setState(104);
		        	$this->param();
		        	$this->setState(109);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_param);

		    try {
		        $localContext = new Context\ParamDefContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(110);
		        $this->match(self::ID);
		        $this->setState(111);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeList(): Context\TypeListContext
		{
		    $localContext = new Context\TypeListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_typeList);

		    try {
		        $this->setState(125);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__9:
		            case self::T__10:
		            case self::T__26:
		            case self::T__27:
		            case self::T__28:
		            case self::T__29:
		            case self::TYPE_STRING:
		            case self::TYPE_BOOL:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(113);
		            	$this->type();
		            	break;

		            case self::T__2:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(114);
		            	$this->match(self::T__2);
		            	$this->setState(115);
		            	$this->type();
		            	$this->setState(120);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::T__4) {
		            		$this->setState(116);
		            		$this->match(self::T__4);
		            		$this->setState(117);
		            		$this->type();
		            		$this->setState(122);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(123);
		            	$this->match(self::T__3);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStmt(): Context\ReturnStmtContext
		{
		    $localContext = new Context\ReturnStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(127);
		        $this->match(self::RETURN);
		        $this->setState(129);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
		        	$this->setState(128);
		        	$this->expressionList();
		        }
		        $this->setState(131);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprStmt(): Context\ExprStmtContext
		{
		    $localContext = new Context\ExprStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_exprStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(133);
		        $this->recursiveExpression(0);
		        $this->setState(134);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_ifStmt);

		    try {
		        $this->setState(153);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\IfStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(136);
		        	    $this->match(self::IF);
		        	    $this->setState(137);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(138);
		        	    $this->block();
		        	    $this->setState(144);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(139);
		        	    	    $this->match(self::ELSE);
		        	    	    $this->setState(142);
		        	    	    $this->errorHandler->sync($this);

		        	    	    switch ($this->input->LA(1)) {
		        	    	        case self::T__0:
		        	    	        	$this->setState(140);
		        	    	        	$this->block();
		        	    	        	break;

		        	    	        case self::IF:
		        	    	        	$this->setState(141);
		        	    	        	$this->ifStmt();
		        	    	        	break;

		        	    	    default:
		        	    	    	throw new NoViableAltException($this);
		        	    	    }
		        	    	break;
		        	    }
		        	break;

		        	case 2:
		        	    $localContext = new Context\IfStatementSingleContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(146);
		        	    $this->match(self::IF);
		        	    $this->setState(147);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(148);
		        	    $this->instruction();
		        	    $this->setState(151);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(149);
		        	    	    $this->match(self::ELSE);
		        	    	    $this->setState(150);
		        	    	    $this->instruction();
		        	    	break;
		        	    }
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStmt(): Context\ForStmtContext
		{
		    $localContext = new Context\ForStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_forStmt);

		    try {
		        $this->setState(169);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ForClassicContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(155);
		        	    $this->match(self::FOR);
		        	    $this->setState(156);
		        	    $this->forInit();
		        	    $this->setState(157);
		        	    $this->match(self::T__5);
		        	    $this->setState(158);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(159);
		        	    $this->match(self::T__5);
		        	    $this->setState(160);
		        	    $this->forPost();
		        	    $this->setState(161);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ForWhileContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(163);
		        	    $this->match(self::FOR);
		        	    $this->setState(164);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(165);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ForInfiniteContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(167);
		        	    $this->match(self::FOR);
		        	    $this->setState(168);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forInit(): Context\ForInitContext
		{
		    $localContext = new Context\ForInitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_forInit);

		    try {
		        $this->setState(180);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::VAR:
		            	$localContext = new Context\ForVarDeclContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(171);
		            	$this->match(self::VAR);
		            	$this->setState(172);
		            	$this->match(self::ID);
		            	$this->setState(173);
		            	$this->type();
		            	$this->setState(176);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::T__6) {
		            		$this->setState(174);
		            		$this->match(self::T__6);
		            		$this->setState(175);
		            		$this->recursiveExpression(0);
		            	}
		            	break;

		            case self::T__2:
		            case self::T__9:
		            case self::T__10:
		            case self::T__12:
		            case self::T__13:
		            case self::T__14:
		            case self::T__26:
		            case self::T__27:
		            case self::T__28:
		            case self::T__29:
		            case self::TYPE_STRING:
		            case self::TYPE_BOOL:
		            case self::BOOL:
		            case self::ID:
		            case self::FLOAT:
		            case self::RUNE:
		            case self::NIL:
		            case self::INT:
		            case self::STRING:
		            	$localContext = new Context\ForAssignContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(178);
		            	$this->assignStmt();
		            	break;

		            case self::T__5:
		            	$localContext = new Context\ForEmptyContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);

		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forPost(): Context\ForPostContext
		{
		    $localContext = new Context\ForPostContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_forPost);

		    try {
		        $this->setState(184);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__2:
		            case self::T__9:
		            case self::T__10:
		            case self::T__12:
		            case self::T__13:
		            case self::T__14:
		            case self::T__26:
		            case self::T__27:
		            case self::T__28:
		            case self::T__29:
		            case self::TYPE_STRING:
		            case self::TYPE_BOOL:
		            case self::BOOL:
		            case self::ID:
		            case self::FLOAT:
		            case self::RUNE:
		            case self::NIL:
		            case self::INT:
		            case self::STRING:
		            	$localContext = new Context\ForPostAssignContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(182);
		            	$this->assignStmt();
		            	break;

		            case self::T__0:
		            	$localContext = new Context\ForPostEmptyContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);

		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_switchStmt);

		    try {
		        $localContext = new Context\SwitchStatementContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(186);
		        $this->match(self::SWITCH);
		        $this->setState(187);
		        $this->recursiveExpression(0);
		        $this->setState(188);
		        $this->match(self::T__0);
		        $this->setState(192);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE || $_la === self::DEFAULT) {
		        	$this->setState(189);
		        	$this->switchCase();
		        	$this->setState(194);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(195);
		        $this->match(self::T__1);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchCase(): Context\SwitchCaseContext
		{
		    $localContext = new Context\SwitchCaseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_switchCase);

		    try {
		        $this->setState(214);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$localContext = new Context\CaseBlockContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(197);
		            	$this->match(self::CASE);
		            	$this->setState(198);
		            	$this->expressionList();
		            	$this->setState(199);
		            	$this->match(self::T__7);
		            	$this->setState(203);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		            		$this->setState(200);
		            		$this->instruction();
		            		$this->setState(205);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		            case self::DEFAULT:
		            	$localContext = new Context\DefaultBlockContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(206);
		            	$this->match(self::DEFAULT);
		            	$this->setState(207);
		            	$this->match(self::T__7);
		            	$this->setState(211);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		            		$this->setState(208);
		            		$this->instruction();
		            		$this->setState(213);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function breakStmt(): Context\BreakStmtContext
		{
		    $localContext = new Context\BreakStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_breakStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(216);
		        $this->match(self::BREAK);
		        $this->setState(217);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function continueStmt(): Context\ContinueStmtContext
		{
		    $localContext = new Context\ContinueStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_continueStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(219);
		        $this->match(self::CONTINUE);
		        $this->setState(220);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function printStmt(): Context\PrintStmtContext
		{
		    $localContext = new Context\PrintStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(222);
		        $this->match(self::FMT);
		        $this->setState(223);
		        $this->match(self::T__2);
		        $this->setState(225);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
		        	$this->setState(224);
		        	$this->expressionList();
		        }
		        $this->setState(227);
		        $this->match(self::T__3);
		        $this->setState(228);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varDecl(): Context\VarDeclContext
		{
		    $localContext = new Context\VarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_varDecl);

		    try {
		        $localContext = new Context\VarDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(230);
		        $this->match(self::VAR);
		        $this->setState(231);
		        $this->match(self::ID);
		        $this->setState(232);
		        $this->type();
		        $this->setState(235);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__6) {
		        	$this->setState(233);
		        	$this->match(self::T__6);
		        	$this->setState(234);
		        	$this->recursiveExpression(0);
		        }
		        $this->setState(237);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constDecl(): Context\ConstDeclContext
		{
		    $localContext = new Context\ConstDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_constDecl);

		    try {
		        $localContext = new Context\ConstDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(239);
		        $this->match(self::CONST);
		        $this->setState(240);
		        $this->match(self::ID);
		        $this->setState(241);
		        $this->type();
		        $this->setState(242);
		        $this->match(self::T__6);
		        $this->setState(243);
		        $this->recursiveExpression(0);
		        $this->setState(244);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function shortVarDecl(): Context\ShortVarDeclContext
		{
		    $localContext = new Context\ShortVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_shortVarDecl);

		    try {
		        $localContext = new Context\ShortVarDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(246);
		        $this->idList();
		        $this->setState(247);
		        $this->match(self::T__8);
		        $this->setState(248);
		        $this->expressionList();
		        $this->setState(249);
		        $this->stmtTerminator();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function idList(): Context\IdListContext
		{
		    $localContext = new Context\IdListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(251);
		        $this->match(self::ID);
		        $this->setState(256);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(252);
		        	$this->match(self::T__4);
		        	$this->setState(253);
		        	$this->match(self::ID);
		        	$this->setState(258);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignStmt(): Context\AssignStmtContext
		{
		    $localContext = new Context\AssignStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_assignStmt);

		    try {
		        $this->setState(275);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\PtrAssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(259);
		        	    $this->match(self::T__9);
		        	    $this->setState(260);
		        	    $this->match(self::ID);
		        	    $this->setState(261);
		        	    $this->match(self::T__6);
		        	    $this->setState(262);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 2:
		        	    $localContext = new Context\AssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(263);
		        	    $this->match(self::ID);
		        	    $this->setState(264);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 263882790666368) !== 0))) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(265);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 3:
		        	    $localContext = new Context\ArrayAssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(266);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(267);
		        	    $this->match(self::T__10);
		        	    $this->setState(268);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(269);
		        	    $this->match(self::T__11);
		        	    $this->setState(270);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 263882790666368) !== 0))) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(271);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 4:
		        	    $localContext = new Context\IncrementDecrementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(273);
		        	    $this->match(self::ID);
		        	    $this->setState(274);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!($_la === self::INC || $_la === self::DEC)) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function stmtTerminator(): Context\StmtTerminatorContext
		{
		    $localContext = new Context\StmtTerminatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_stmtTerminator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(277);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::EOF || $_la === self::T__5 || $_la === self::NEWLINE)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionList(): Context\ExpressionListContext
		{
		    $localContext = new Context\ExpressionListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_expressionList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->recursiveExpression(0);
		        $this->setState(284);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(280);
		        	$this->match(self::T__4);
		        	$this->setState(281);
		        	$this->recursiveExpression(0);
		        	$this->setState(286);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence): Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 50;
			$this->enterRecursionRule($localContext, 50, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(320);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
					case 1:
					    $localContext = new Context\NotExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(288);
					    $this->match(self::T__12);
					    $this->setState(289);
					    $this->recursiveExpression(21);
					break;

					case 2:
					    $localContext = new Context\UnaryMinusExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(290);
					    $this->match(self::T__13);
					    $this->setState(291);
					    $this->recursiveExpression(20);
					break;

					case 3:
					    $localContext = new Context\AddressOfExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(292);
					    $this->match(self::T__14);
					    $this->setState(293);
					    $this->match(self::ID);
					break;

					case 4:
					    $localContext = new Context\DerefExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(294);
					    $this->match(self::T__9);
					    $this->setState(295);
					    $this->recursiveExpression(18);
					break;

					case 5:
					    $localContext = new Context\ArrayLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(296);
					    $this->type();
					    $this->setState(297);
					    $this->match(self::T__0);
					    $this->setState(299);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
					    	$this->setState(298);
					    	$this->expressionList();
					    }
					    $this->setState(301);
					    $this->match(self::T__1);
					break;

					case 6:
					    $localContext = new Context\CallExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(303);
					    $this->match(self::ID);
					    $this->setState(304);
					    $this->match(self::T__2);
					    $this->setState(306);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
					    	$this->setState(305);
					    	$this->expressionList();
					    }
					    $this->setState(308);
					    $this->match(self::T__3);
					break;

					case 7:
					    $localContext = new Context\ParenExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(309);
					    $this->match(self::T__2);
					    $this->setState(310);
					    $this->recursiveExpression(0);
					    $this->setState(311);
					    $this->match(self::T__3);
					break;

					case 8:
					    $localContext = new Context\IdExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(313);
					    $this->match(self::ID);
					break;

					case 9:
					    $localContext = new Context\FloatExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(314);
					    $this->match(self::FLOAT);
					break;

					case 10:
					    $localContext = new Context\RuneExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(315);
					    $this->match(self::RUNE);
					break;

					case 11:
					    $localContext = new Context\NilExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(316);
					    $this->match(self::NIL);
					break;

					case 12:
					    $localContext = new Context\IntExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(317);
					    $this->match(self::INT);
					break;

					case 13:
					    $localContext = new Context\StrExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(318);
					    $this->match(self::STRING);
					break;

					case 14:
					    $localContext = new Context\BoolExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(319);
					    $this->match(self::BOOL);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(347);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(345);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(322);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(323);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 197632) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(324);
							    $this->recursiveExpression(18);
							break;

							case 2:
							    $localContext = new Context\AddSubExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(325);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(326);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__13 || $_la === self::T__17)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(327);
							    $this->recursiveExpression(17);
							break;

							case 3:
							    $localContext = new Context\RelExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(328);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(329);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 7864320) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(330);
							    $this->recursiveExpression(16);
							break;

							case 4:
							    $localContext = new Context\EqExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(331);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(332);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__22 || $_la === self::T__23)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(333);
							    $this->recursiveExpression(15);
							break;

							case 5:
							    $localContext = new Context\AndExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(334);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(335);
							    $this->match(self::T__24);
							    $this->setState(336);
							    $this->recursiveExpression(14);
							break;

							case 6:
							    $localContext = new Context\OrExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(337);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(338);
							    $this->match(self::T__25);
							    $this->setState(339);
							    $this->recursiveExpression(13);
							break;

							case 7:
							    $localContext = new Context\ArrayAccessExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(340);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(341);
							    $this->match(self::T__10);
							    $this->setState(342);
							    $this->recursiveExpression(0);
							    $this->setState(343);
							    $this->match(self::T__11);
							break;
						} 
					}

					$this->setState(349);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_type);

		    try {
		        $this->setState(362);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__26:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(350);
		            	$this->match(self::T__26);
		            	break;

		            case self::T__27:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(351);
		            	$this->match(self::T__27);
		            	break;

		            case self::T__28:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(352);
		            	$this->match(self::T__28);
		            	break;

		            case self::TYPE_STRING:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(353);
		            	$this->match(self::TYPE_STRING);
		            	break;

		            case self::TYPE_BOOL:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(354);
		            	$this->match(self::TYPE_BOOL);
		            	break;

		            case self::T__29:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(355);
		            	$this->match(self::T__29);
		            	break;

		            case self::T__9:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(356);
		            	$this->match(self::T__9);
		            	$this->setState(357);
		            	$this->type();
		            	break;

		            case self::T__10:
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(358);
		            	$this->match(self::T__10);
		            	$this->setState(359);
		            	$this->match(self::INT);
		            	$this->setState(360);
		            	$this->match(self::T__11);
		            	$this->setState(361);
		            	$this->type();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 25:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 17);

			    case 1:
			        return $this->precpred($this->ctx, 16);

			    case 2:
			        return $this->precpred($this->ctx, 15);

			    case 3:
			        return $this->precpred($this->ctx, 14);

			    case 4:
			        return $this->precpred($this->ctx, 13);

			    case 5:
			        return $this->precpred($this->ctx, 12);

			    case 6:
			        return $this->precpred($this->ctx, 9);
			}

			return true;
		}
	}
}

namespace App\Compiler\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use App\Compiler\GolampiParser;
	use App\Compiler\GolampiVisitor;

	class FileContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_file;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EOF, 0);
	    }

	    /**
	     * @return array<InstructionContext>|InstructionContext|null
	     */
	    public function instruction(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstructionContext::class);
	    	}

	        return $this->getTypedRuleContext(InstructionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFile($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class InstructionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_instruction;
	    }

	    public function funcDecl(): ?FuncDeclContext
	    {
	    	return $this->getTypedRuleContext(FuncDeclContext::class, 0);
	    }

	    public function printStmt(): ?PrintStmtContext
	    {
	    	return $this->getTypedRuleContext(PrintStmtContext::class, 0);
	    }

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function constDecl(): ?ConstDeclContext
	    {
	    	return $this->getTypedRuleContext(ConstDeclContext::class, 0);
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function switchStmt(): ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

	    public function forStmt(): ?ForStmtContext
	    {
	    	return $this->getTypedRuleContext(ForStmtContext::class, 0);
	    }

	    public function breakStmt(): ?BreakStmtContext
	    {
	    	return $this->getTypedRuleContext(BreakStmtContext::class, 0);
	    }

	    public function continueStmt(): ?ContinueStmtContext
	    {
	    	return $this->getTypedRuleContext(ContinueStmtContext::class, 0);
	    }

	    public function returnStmt(): ?ReturnStmtContext
	    {
	    	return $this->getTypedRuleContext(ReturnStmtContext::class, 0);
	    }

	    public function exprStmt(): ?ExprStmtContext
	    {
	    	return $this->getTypedRuleContext(ExprStmtContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function NEWLINE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NEWLINE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitInstruction($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_block;
	    }

	    /**
	     * @return array<InstructionContext>|InstructionContext|null
	     */
	    public function instruction(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstructionContext::class);
	    	}

	        return $this->getTypedRuleContext(InstructionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_funcDecl;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class FuncDeclarationContext extends FuncDeclContext
	{
		public function __construct(FuncDeclContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FUNC, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function paramList(): ?ParamListContext
	    {
	    	return $this->getTypedRuleContext(ParamListContext::class, 0);
	    }

	    public function typeList(): ?TypeListContext
	    {
	    	return $this->getTypedRuleContext(TypeListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFuncDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_paramList;
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParamList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_param;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ParamDefContext extends ParamContext
	{
		public function __construct(ParamContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParamDef($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_typeList;
	    }

	    /**
	     * @return array<TypeContext>|TypeContext|null
	     */
	    public function type(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTypeList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnStmt;
	    }

	    public function RETURN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RETURN, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

	    public function expressionList(): ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_exprStmt;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExprStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_ifStmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class IfStatementContext extends IfStmtContext
	{
		public function __construct(IfStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::IF, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<BlockContext>|BlockContext|null
	     */
	    public function block(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BlockContext::class);
	    	}

	        return $this->getTypedRuleContext(BlockContext::class, $index);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ELSE, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIfStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IfStatementSingleContext extends IfStmtContext
	{
		public function __construct(IfStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::IF, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<InstructionContext>|InstructionContext|null
	     */
	    public function instruction(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstructionContext::class);
	    	}

	        return $this->getTypedRuleContext(InstructionContext::class, $index);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ELSE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIfStatementSingle($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forStmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ForWhileContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FOR, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForWhile($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForClassicContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FOR, 0);
	    }

	    public function forInit(): ?ForInitContext
	    {
	    	return $this->getTypedRuleContext(ForInitContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function forPost(): ?ForPostContext
	    {
	    	return $this->getTypedRuleContext(ForPostContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForClassic($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForInfiniteContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FOR, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForInfinite($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForInitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forInit;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ForVarDeclContext extends ForInitContext
	{
		public function __construct(ForInitContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function VAR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::VAR, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForEmptyContext extends ForInitContext
	{
		public function __construct(ForInitContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForEmpty($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForAssignContext extends ForInitContext
	{
		public function __construct(ForInitContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForAssign($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForPostContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forPost;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ForPostEmptyContext extends ForPostContext
	{
		public function __construct(ForPostContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForPostEmpty($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForPostAssignContext extends ForPostContext
	{
		public function __construct(ForPostContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForPostAssign($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_switchStmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class SwitchStatementContext extends SwitchStmtContext
	{
		public function __construct(SwitchStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SWITCH(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::SWITCH, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<SwitchCaseContext>|SwitchCaseContext|null
	     */
	    public function switchCase(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SwitchCaseContext::class);
	    	}

	        return $this->getTypedRuleContext(SwitchCaseContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSwitchStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchCaseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_switchCase;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class DefaultBlockContext extends SwitchCaseContext
	{
		public function __construct(SwitchCaseContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DEFAULT, 0);
	    }

	    /**
	     * @return array<InstructionContext>|InstructionContext|null
	     */
	    public function instruction(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstructionContext::class);
	    	}

	        return $this->getTypedRuleContext(InstructionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDefaultBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class CaseBlockContext extends SwitchCaseContext
	{
		public function __construct(SwitchCaseContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CASE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CASE, 0);
	    }

	    public function expressionList(): ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

	    /**
	     * @return array<InstructionContext>|InstructionContext|null
	     */
	    public function instruction(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InstructionContext::class);
	    	}

	        return $this->getTypedRuleContext(InstructionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCaseBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BreakStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_breakStmt;
	    }

	    public function BREAK(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BREAK, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBreakStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ContinueStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_continueStmt;
	    }

	    public function CONTINUE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CONTINUE, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitContinueStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrintStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_printStmt;
	    }

	    public function FMT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FMT, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

	    public function expressionList(): ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPrintStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_varDecl;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class VarDeclarationContext extends VarDeclContext
	{
		public function __construct(VarDeclContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function VAR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::VAR, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitVarDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_constDecl;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ConstDeclarationContext extends ConstDeclContext
	{
		public function __construct(ConstDeclContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CONST(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CONST, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitConstDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ShortVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_shortVarDecl;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ShortVarDeclarationContext extends ShortVarDeclContext
	{
		public function __construct(ShortVarDeclContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function expressionList(): ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitShortVarDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_idList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::ID);
	    	}

	        return $this->getToken(GolampiParser::ID, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignStmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AssignmentContext extends AssignStmtContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(AssignStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function PLUS_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PLUS_ASSIGN, 0);
	    }

	    public function MINUS_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MINUS_ASSIGN, 0);
	    }

	    public function MUL_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MUL_ASSIGN, 0);
	    }

	    public function DIV_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DIV_ASSIGN, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IncrementDecrementContext extends AssignStmtContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(AssignStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function INC(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INC, 0);
	    }

	    public function DEC(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DEC, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIncrementDecrement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PtrAssignmentContext extends AssignStmtContext
	{
		public function __construct(AssignStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPtrAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayAssignmentContext extends AssignStmtContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(AssignStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function PLUS_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PLUS_ASSIGN, 0);
	    }

	    public function MINUS_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MINUS_ASSIGN, 0);
	    }

	    public function MUL_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MUL_ASSIGN, 0);
	    }

	    public function DIV_ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DIV_ASSIGN, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StmtTerminatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_stmtTerminator;
	    }

	    public function NEWLINE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NEWLINE, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EOF, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitStmtTerminator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expressionList;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExpressionList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expression;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AndExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAndExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BoolExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BOOL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BOOL, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBoolExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FloatExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFloatExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NilExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NIL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NIL, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitNilExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DerefExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDerefExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RelExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRelExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayAccessExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayAccessExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayLiteralContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function expressionList(): ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class OrExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitOrExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RuneExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRuneExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MulDivExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitMulDivExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AddressOfExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAddressOfExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class EqExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitEqExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StrExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitStrExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class CallExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function expressionList(): ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCallExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NotExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitNotExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IntExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIntExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ParenExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParenExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AddSubExprContext extends ExpressionContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAddSubExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class UnaryMinusExprContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitUnaryMinusExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_type;
	    }

	    public function TYPE_STRING(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::TYPE_STRING, 0);
	    }

	    public function TYPE_BOOL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::TYPE_BOOL, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}