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
               RULE_exprStmt = 8, RULE_ifStmt = 9, RULE_forStmt = 10, RULE_switchStmt = 11, 
               RULE_switchCase = 12, RULE_breakStmt = 13, RULE_continueStmt = 14, 
               RULE_printStmt = 15, RULE_varDecl = 16, RULE_constDecl = 17, 
               RULE_shortVarDecl = 18, RULE_idList = 19, RULE_assignStmt = 20, 
               RULE_stmtTerminator = 21, RULE_expressionList = 22, RULE_expression = 23, 
               RULE_type = 24;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'file', 'instruction', 'block', 'funcDecl', 'paramList', 'param', 'typeList', 
			'returnStmt', 'exprStmt', 'ifStmt', 'forStmt', 'switchStmt', 'switchCase', 
			'breakStmt', 'continueStmt', 'printStmt', 'varDecl', 'constDecl', 'shortVarDecl', 
			'idList', 'assignStmt', 'stmtTerminator', 'expressionList', 'expression', 
			'type'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'{'", "'}'", "'('", "')'", "','", "';'", "':'", "'='", "':='", 
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
			[4, 1, 63, 340, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 1, 0, 5, 0, 52, 8, 0, 10, 0, 12, 0, 55, 9, 0, 1, 0, 1, 
		    0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 74, 8, 1, 1, 2, 1, 2, 5, 2, 78, 8, 
		    2, 10, 2, 12, 2, 81, 9, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 3, 
		    3, 89, 8, 3, 1, 3, 1, 3, 3, 3, 93, 8, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 
		    4, 5, 4, 100, 8, 4, 10, 4, 12, 4, 103, 9, 4, 1, 5, 1, 5, 1, 5, 1, 
		    6, 1, 6, 1, 6, 1, 6, 1, 6, 5, 6, 113, 8, 6, 10, 6, 12, 6, 116, 9, 
		    6, 1, 6, 1, 6, 3, 6, 120, 8, 6, 1, 7, 1, 7, 3, 7, 124, 8, 7, 1, 7, 
		    1, 7, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 
		    137, 8, 9, 3, 9, 139, 8, 9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 
		    10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 3, 10, 154, 8, 
		    10, 1, 11, 1, 11, 1, 11, 1, 11, 5, 11, 160, 8, 11, 10, 11, 12, 11, 
		    163, 9, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 12, 5, 12, 171, 
		    8, 12, 10, 12, 12, 12, 174, 9, 12, 1, 12, 1, 12, 1, 12, 5, 12, 179, 
		    8, 12, 10, 12, 12, 12, 182, 9, 12, 3, 12, 184, 8, 12, 1, 13, 1, 13, 
		    1, 13, 1, 14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 3, 15, 195, 8, 15, 
		    1, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 3, 16, 205, 
		    8, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 5, 19, 
		    224, 8, 19, 10, 19, 12, 19, 227, 9, 19, 1, 20, 1, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 
		    251, 8, 20, 1, 21, 1, 21, 1, 22, 1, 22, 1, 22, 5, 22, 258, 8, 22, 
		    10, 22, 12, 22, 261, 9, 22, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 23, 275, 8, 23, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 23, 282, 8, 23, 1, 23, 1, 23, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 
		    3, 23, 296, 8, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 
		    1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 5, 23, 321, 8, 23, 10, 
		    23, 12, 23, 324, 9, 23, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 
		    1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 3, 24, 338, 8, 24, 1, 24, 
		    0, 1, 46, 25, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 
		    30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 0, 7, 2, 0, 8, 8, 44, 47, 
		    1, 0, 48, 49, 2, 1, 6, 6, 63, 63, 2, 0, 10, 10, 16, 17, 2, 0, 14, 
		    14, 18, 18, 1, 0, 19, 22, 1, 0, 23, 24, 380, 0, 53, 1, 0, 0, 0, 2, 
		    73, 1, 0, 0, 0, 4, 75, 1, 0, 0, 0, 6, 84, 1, 0, 0, 0, 8, 96, 1, 0, 
		    0, 0, 10, 104, 1, 0, 0, 0, 12, 119, 1, 0, 0, 0, 14, 121, 1, 0, 0, 
		    0, 16, 127, 1, 0, 0, 0, 18, 130, 1, 0, 0, 0, 20, 153, 1, 0, 0, 0, 
		    22, 155, 1, 0, 0, 0, 24, 183, 1, 0, 0, 0, 26, 185, 1, 0, 0, 0, 28, 
		    188, 1, 0, 0, 0, 30, 191, 1, 0, 0, 0, 32, 199, 1, 0, 0, 0, 34, 208, 
		    1, 0, 0, 0, 36, 215, 1, 0, 0, 0, 38, 220, 1, 0, 0, 0, 40, 250, 1, 
		    0, 0, 0, 42, 252, 1, 0, 0, 0, 44, 254, 1, 0, 0, 0, 46, 295, 1, 0, 
		    0, 0, 48, 337, 1, 0, 0, 0, 50, 52, 3, 2, 1, 0, 51, 50, 1, 0, 0, 0, 
		    52, 55, 1, 0, 0, 0, 53, 51, 1, 0, 0, 0, 53, 54, 1, 0, 0, 0, 54, 56, 
		    1, 0, 0, 0, 55, 53, 1, 0, 0, 0, 56, 57, 5, 0, 0, 1, 57, 1, 1, 0, 0, 
		    0, 58, 74, 3, 6, 3, 0, 59, 74, 3, 30, 15, 0, 60, 74, 3, 32, 16, 0, 
		    61, 74, 3, 34, 17, 0, 62, 74, 3, 36, 18, 0, 63, 74, 3, 40, 20, 0, 
		    64, 74, 3, 18, 9, 0, 65, 74, 3, 22, 11, 0, 66, 74, 3, 20, 10, 0, 67, 
		    74, 3, 26, 13, 0, 68, 74, 3, 28, 14, 0, 69, 74, 3, 14, 7, 0, 70, 74, 
		    3, 16, 8, 0, 71, 74, 3, 4, 2, 0, 72, 74, 5, 63, 0, 0, 73, 58, 1, 0, 
		    0, 0, 73, 59, 1, 0, 0, 0, 73, 60, 1, 0, 0, 0, 73, 61, 1, 0, 0, 0, 
		    73, 62, 1, 0, 0, 0, 73, 63, 1, 0, 0, 0, 73, 64, 1, 0, 0, 0, 73, 65, 
		    1, 0, 0, 0, 73, 66, 1, 0, 0, 0, 73, 67, 1, 0, 0, 0, 73, 68, 1, 0, 
		    0, 0, 73, 69, 1, 0, 0, 0, 73, 70, 1, 0, 0, 0, 73, 71, 1, 0, 0, 0, 
		    73, 72, 1, 0, 0, 0, 74, 3, 1, 0, 0, 0, 75, 79, 5, 1, 0, 0, 76, 78, 
		    3, 2, 1, 0, 77, 76, 1, 0, 0, 0, 78, 81, 1, 0, 0, 0, 79, 77, 1, 0, 
		    0, 0, 79, 80, 1, 0, 0, 0, 80, 82, 1, 0, 0, 0, 81, 79, 1, 0, 0, 0, 
		    82, 83, 5, 2, 0, 0, 83, 5, 1, 0, 0, 0, 84, 85, 5, 38, 0, 0, 85, 86, 
		    5, 54, 0, 0, 86, 88, 5, 3, 0, 0, 87, 89, 3, 8, 4, 0, 88, 87, 1, 0, 
		    0, 0, 88, 89, 1, 0, 0, 0, 89, 90, 1, 0, 0, 0, 90, 92, 5, 4, 0, 0, 
		    91, 93, 3, 12, 6, 0, 92, 91, 1, 0, 0, 0, 92, 93, 1, 0, 0, 0, 93, 94, 
		    1, 0, 0, 0, 94, 95, 3, 4, 2, 0, 95, 7, 1, 0, 0, 0, 96, 101, 3, 10, 
		    5, 0, 97, 98, 5, 5, 0, 0, 98, 100, 3, 10, 5, 0, 99, 97, 1, 0, 0, 0, 
		    100, 103, 1, 0, 0, 0, 101, 99, 1, 0, 0, 0, 101, 102, 1, 0, 0, 0, 102, 
		    9, 1, 0, 0, 0, 103, 101, 1, 0, 0, 0, 104, 105, 5, 54, 0, 0, 105, 106, 
		    3, 48, 24, 0, 106, 11, 1, 0, 0, 0, 107, 120, 3, 48, 24, 0, 108, 109, 
		    5, 3, 0, 0, 109, 114, 3, 48, 24, 0, 110, 111, 5, 5, 0, 0, 111, 113, 
		    3, 48, 24, 0, 112, 110, 1, 0, 0, 0, 113, 116, 1, 0, 0, 0, 114, 112, 
		    1, 0, 0, 0, 114, 115, 1, 0, 0, 0, 115, 117, 1, 0, 0, 0, 116, 114, 
		    1, 0, 0, 0, 117, 118, 5, 4, 0, 0, 118, 120, 1, 0, 0, 0, 119, 107, 
		    1, 0, 0, 0, 119, 108, 1, 0, 0, 0, 120, 13, 1, 0, 0, 0, 121, 123, 5, 
		    39, 0, 0, 122, 124, 3, 44, 22, 0, 123, 122, 1, 0, 0, 0, 123, 124, 
		    1, 0, 0, 0, 124, 125, 1, 0, 0, 0, 125, 126, 3, 42, 21, 0, 126, 15, 
		    1, 0, 0, 0, 127, 128, 3, 46, 23, 0, 128, 129, 3, 42, 21, 0, 129, 17, 
		    1, 0, 0, 0, 130, 131, 5, 33, 0, 0, 131, 132, 3, 46, 23, 0, 132, 138, 
		    3, 4, 2, 0, 133, 136, 5, 34, 0, 0, 134, 137, 3, 4, 2, 0, 135, 137, 
		    3, 18, 9, 0, 136, 134, 1, 0, 0, 0, 136, 135, 1, 0, 0, 0, 137, 139, 
		    1, 0, 0, 0, 138, 133, 1, 0, 0, 0, 138, 139, 1, 0, 0, 0, 139, 19, 1, 
		    0, 0, 0, 140, 141, 5, 35, 0, 0, 141, 142, 3, 32, 16, 0, 142, 143, 
		    3, 46, 23, 0, 143, 144, 5, 6, 0, 0, 144, 145, 3, 40, 20, 0, 145, 146, 
		    3, 4, 2, 0, 146, 154, 1, 0, 0, 0, 147, 148, 5, 35, 0, 0, 148, 149, 
		    3, 46, 23, 0, 149, 150, 3, 4, 2, 0, 150, 154, 1, 0, 0, 0, 151, 152, 
		    5, 35, 0, 0, 152, 154, 3, 4, 2, 0, 153, 140, 1, 0, 0, 0, 153, 147, 
		    1, 0, 0, 0, 153, 151, 1, 0, 0, 0, 154, 21, 1, 0, 0, 0, 155, 156, 5, 
		    41, 0, 0, 156, 157, 3, 46, 23, 0, 157, 161, 5, 1, 0, 0, 158, 160, 
		    3, 24, 12, 0, 159, 158, 1, 0, 0, 0, 160, 163, 1, 0, 0, 0, 161, 159, 
		    1, 0, 0, 0, 161, 162, 1, 0, 0, 0, 162, 164, 1, 0, 0, 0, 163, 161, 
		    1, 0, 0, 0, 164, 165, 5, 2, 0, 0, 165, 23, 1, 0, 0, 0, 166, 167, 5, 
		    42, 0, 0, 167, 168, 3, 44, 22, 0, 168, 172, 5, 7, 0, 0, 169, 171, 
		    3, 2, 1, 0, 170, 169, 1, 0, 0, 0, 171, 174, 1, 0, 0, 0, 172, 170, 
		    1, 0, 0, 0, 172, 173, 1, 0, 0, 0, 173, 184, 1, 0, 0, 0, 174, 172, 
		    1, 0, 0, 0, 175, 176, 5, 43, 0, 0, 176, 180, 5, 7, 0, 0, 177, 179, 
		    3, 2, 1, 0, 178, 177, 1, 0, 0, 0, 179, 182, 1, 0, 0, 0, 180, 178, 
		    1, 0, 0, 0, 180, 181, 1, 0, 0, 0, 181, 184, 1, 0, 0, 0, 182, 180, 
		    1, 0, 0, 0, 183, 166, 1, 0, 0, 0, 183, 175, 1, 0, 0, 0, 184, 25, 1, 
		    0, 0, 0, 185, 186, 5, 36, 0, 0, 186, 187, 3, 42, 21, 0, 187, 27, 1, 
		    0, 0, 0, 188, 189, 5, 37, 0, 0, 189, 190, 3, 42, 21, 0, 190, 29, 1, 
		    0, 0, 0, 191, 192, 5, 32, 0, 0, 192, 194, 5, 3, 0, 0, 193, 195, 3, 
		    44, 22, 0, 194, 193, 1, 0, 0, 0, 194, 195, 1, 0, 0, 0, 195, 196, 1, 
		    0, 0, 0, 196, 197, 5, 4, 0, 0, 197, 198, 3, 42, 21, 0, 198, 31, 1, 
		    0, 0, 0, 199, 200, 5, 31, 0, 0, 200, 201, 5, 54, 0, 0, 201, 204, 3, 
		    48, 24, 0, 202, 203, 5, 8, 0, 0, 203, 205, 3, 46, 23, 0, 204, 202, 
		    1, 0, 0, 0, 204, 205, 1, 0, 0, 0, 205, 206, 1, 0, 0, 0, 206, 207, 
		    3, 42, 21, 0, 207, 33, 1, 0, 0, 0, 208, 209, 5, 40, 0, 0, 209, 210, 
		    5, 54, 0, 0, 210, 211, 3, 48, 24, 0, 211, 212, 5, 8, 0, 0, 212, 213, 
		    3, 46, 23, 0, 213, 214, 3, 42, 21, 0, 214, 35, 1, 0, 0, 0, 215, 216, 
		    3, 38, 19, 0, 216, 217, 5, 9, 0, 0, 217, 218, 3, 44, 22, 0, 218, 219, 
		    3, 42, 21, 0, 219, 37, 1, 0, 0, 0, 220, 225, 5, 54, 0, 0, 221, 222, 
		    5, 5, 0, 0, 222, 224, 5, 54, 0, 0, 223, 221, 1, 0, 0, 0, 224, 227, 
		    1, 0, 0, 0, 225, 223, 1, 0, 0, 0, 225, 226, 1, 0, 0, 0, 226, 39, 1, 
		    0, 0, 0, 227, 225, 1, 0, 0, 0, 228, 229, 5, 10, 0, 0, 229, 230, 5, 
		    54, 0, 0, 230, 231, 5, 8, 0, 0, 231, 232, 3, 46, 23, 0, 232, 233, 
		    3, 42, 21, 0, 233, 251, 1, 0, 0, 0, 234, 235, 5, 54, 0, 0, 235, 236, 
		    7, 0, 0, 0, 236, 237, 3, 46, 23, 0, 237, 238, 3, 42, 21, 0, 238, 251, 
		    1, 0, 0, 0, 239, 240, 3, 46, 23, 0, 240, 241, 5, 11, 0, 0, 241, 242, 
		    3, 46, 23, 0, 242, 243, 5, 12, 0, 0, 243, 244, 7, 0, 0, 0, 244, 245, 
		    3, 46, 23, 0, 245, 246, 3, 42, 21, 0, 246, 251, 1, 0, 0, 0, 247, 248, 
		    5, 54, 0, 0, 248, 249, 7, 1, 0, 0, 249, 251, 3, 42, 21, 0, 250, 228, 
		    1, 0, 0, 0, 250, 234, 1, 0, 0, 0, 250, 239, 1, 0, 0, 0, 250, 247, 
		    1, 0, 0, 0, 251, 41, 1, 0, 0, 0, 252, 253, 7, 2, 0, 0, 253, 43, 1, 
		    0, 0, 0, 254, 259, 3, 46, 23, 0, 255, 256, 5, 5, 0, 0, 256, 258, 3, 
		    46, 23, 0, 257, 255, 1, 0, 0, 0, 258, 261, 1, 0, 0, 0, 259, 257, 1, 
		    0, 0, 0, 259, 260, 1, 0, 0, 0, 260, 45, 1, 0, 0, 0, 261, 259, 1, 0, 
		    0, 0, 262, 263, 6, 23, -1, 0, 263, 264, 5, 13, 0, 0, 264, 296, 3, 
		    46, 23, 21, 265, 266, 5, 14, 0, 0, 266, 296, 3, 46, 23, 20, 267, 268, 
		    5, 15, 0, 0, 268, 296, 5, 54, 0, 0, 269, 270, 5, 10, 0, 0, 270, 296, 
		    3, 46, 23, 18, 271, 272, 3, 48, 24, 0, 272, 274, 5, 1, 0, 0, 273, 
		    275, 3, 44, 22, 0, 274, 273, 1, 0, 0, 0, 274, 275, 1, 0, 0, 0, 275, 
		    276, 1, 0, 0, 0, 276, 277, 5, 2, 0, 0, 277, 296, 1, 0, 0, 0, 278, 
		    279, 5, 54, 0, 0, 279, 281, 5, 3, 0, 0, 280, 282, 3, 44, 22, 0, 281, 
		    280, 1, 0, 0, 0, 281, 282, 1, 0, 0, 0, 282, 283, 1, 0, 0, 0, 283, 
		    296, 5, 4, 0, 0, 284, 285, 5, 3, 0, 0, 285, 286, 3, 46, 23, 0, 286, 
		    287, 5, 4, 0, 0, 287, 296, 1, 0, 0, 0, 288, 296, 5, 54, 0, 0, 289, 
		    296, 5, 55, 0, 0, 290, 296, 5, 56, 0, 0, 291, 296, 5, 57, 0, 0, 292, 
		    296, 5, 58, 0, 0, 293, 296, 5, 59, 0, 0, 294, 296, 5, 53, 0, 0, 295, 
		    262, 1, 0, 0, 0, 295, 265, 1, 0, 0, 0, 295, 267, 1, 0, 0, 0, 295, 
		    269, 1, 0, 0, 0, 295, 271, 1, 0, 0, 0, 295, 278, 1, 0, 0, 0, 295, 
		    284, 1, 0, 0, 0, 295, 288, 1, 0, 0, 0, 295, 289, 1, 0, 0, 0, 295, 
		    290, 1, 0, 0, 0, 295, 291, 1, 0, 0, 0, 295, 292, 1, 0, 0, 0, 295, 
		    293, 1, 0, 0, 0, 295, 294, 1, 0, 0, 0, 296, 322, 1, 0, 0, 0, 297, 
		    298, 10, 17, 0, 0, 298, 299, 7, 3, 0, 0, 299, 321, 3, 46, 23, 18, 
		    300, 301, 10, 16, 0, 0, 301, 302, 7, 4, 0, 0, 302, 321, 3, 46, 23, 
		    17, 303, 304, 10, 15, 0, 0, 304, 305, 7, 5, 0, 0, 305, 321, 3, 46, 
		    23, 16, 306, 307, 10, 14, 0, 0, 307, 308, 7, 6, 0, 0, 308, 321, 3, 
		    46, 23, 15, 309, 310, 10, 13, 0, 0, 310, 311, 5, 25, 0, 0, 311, 321, 
		    3, 46, 23, 14, 312, 313, 10, 12, 0, 0, 313, 314, 5, 26, 0, 0, 314, 
		    321, 3, 46, 23, 13, 315, 316, 10, 9, 0, 0, 316, 317, 5, 11, 0, 0, 
		    317, 318, 3, 46, 23, 0, 318, 319, 5, 12, 0, 0, 319, 321, 1, 0, 0, 
		    0, 320, 297, 1, 0, 0, 0, 320, 300, 1, 0, 0, 0, 320, 303, 1, 0, 0, 
		    0, 320, 306, 1, 0, 0, 0, 320, 309, 1, 0, 0, 0, 320, 312, 1, 0, 0, 
		    0, 320, 315, 1, 0, 0, 0, 321, 324, 1, 0, 0, 0, 322, 320, 1, 0, 0, 
		    0, 322, 323, 1, 0, 0, 0, 323, 47, 1, 0, 0, 0, 324, 322, 1, 0, 0, 0, 
		    325, 338, 5, 27, 0, 0, 326, 338, 5, 28, 0, 0, 327, 338, 5, 29, 0, 
		    0, 328, 338, 5, 51, 0, 0, 329, 338, 5, 52, 0, 0, 330, 338, 5, 30, 
		    0, 0, 331, 332, 5, 10, 0, 0, 332, 338, 3, 48, 24, 0, 333, 334, 5, 
		    11, 0, 0, 334, 335, 5, 58, 0, 0, 335, 336, 5, 12, 0, 0, 336, 338, 
		    3, 48, 24, 0, 337, 325, 1, 0, 0, 0, 337, 326, 1, 0, 0, 0, 337, 327, 
		    1, 0, 0, 0, 337, 328, 1, 0, 0, 0, 337, 329, 1, 0, 0, 0, 337, 330, 
		    1, 0, 0, 0, 337, 331, 1, 0, 0, 0, 337, 333, 1, 0, 0, 0, 338, 49, 1, 
		    0, 0, 0, 27, 53, 73, 79, 88, 92, 101, 114, 119, 123, 136, 138, 153, 
		    161, 172, 180, 183, 194, 204, 225, 250, 259, 274, 281, 295, 320, 322, 
		    337];
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
		        $this->setState(53);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		        	$this->setState(50);
		        	$this->instruction();
		        	$this->setState(55);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(56);
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
		        $this->setState(73);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(58);
		        	    $this->funcDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(59);
		        	    $this->printStmt();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(60);
		        	    $this->varDecl();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(61);
		        	    $this->constDecl();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(62);
		        	    $this->shortVarDecl();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(63);
		        	    $this->assignStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(64);
		        	    $this->ifStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(65);
		        	    $this->switchStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(66);
		        	    $this->forStmt();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(67);
		        	    $this->breakStmt();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(68);
		        	    $this->continueStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(69);
		        	    $this->returnStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(70);
		        	    $this->exprStmt();
		        	break;

		        	case 14:
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(71);
		        	    $this->block();
		        	break;

		        	case 15:
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(72);
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
		        $this->setState(75);
		        $this->match(self::T__0);
		        $this->setState(79);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		        	$this->setState(76);
		        	$this->instruction();
		        	$this->setState(81);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(82);
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
		        $this->setState(84);
		        $this->match(self::FUNC);
		        $this->setState(85);
		        $this->match(self::ID);
		        $this->setState(86);
		        $this->match(self::T__2);
		        $this->setState(88);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(87);
		        	$this->paramList();
		        }
		        $this->setState(90);
		        $this->match(self::T__3);
		        $this->setState(92);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 6755401454324744) !== 0)) {
		        	$this->setState(91);
		        	$this->typeList();
		        }
		        $this->setState(94);
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
		        $this->setState(96);
		        $this->param();
		        $this->setState(101);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(97);
		        	$this->match(self::T__4);
		        	$this->setState(98);
		        	$this->param();
		        	$this->setState(103);
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
		        $this->setState(104);
		        $this->match(self::ID);
		        $this->setState(105);
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
		        $this->setState(119);
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
		            	$this->setState(107);
		            	$this->type();
		            	break;

		            case self::T__2:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(108);
		            	$this->match(self::T__2);
		            	$this->setState(109);
		            	$this->type();
		            	$this->setState(114);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::T__4) {
		            		$this->setState(110);
		            		$this->match(self::T__4);
		            		$this->setState(111);
		            		$this->type();
		            		$this->setState(116);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(117);
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
		        $this->setState(121);
		        $this->match(self::RETURN);
		        $this->setState(123);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
		        	$this->setState(122);
		        	$this->expressionList();
		        }
		        $this->setState(125);
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
		        $this->setState(127);
		        $this->recursiveExpression(0);
		        $this->setState(128);
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
		        $localContext = new Context\IfStatementContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(130);
		        $this->match(self::IF);
		        $this->setState(131);
		        $this->recursiveExpression(0);
		        $this->setState(132);
		        $this->block();
		        $this->setState(138);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(133);
		        	$this->match(self::ELSE);
		        	$this->setState(136);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__0:
		        	    	$this->setState(134);
		        	    	$this->block();
		        	    	break;

		        	    case self::IF:
		        	    	$this->setState(135);
		        	    	$this->ifStmt();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
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
		        $this->setState(153);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ForClassicContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(140);
		        	    $this->match(self::FOR);
		        	    $this->setState(141);
		        	    $this->varDecl();
		        	    $this->setState(142);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(143);
		        	    $this->match(self::T__5);
		        	    $this->setState(144);
		        	    $this->assignStmt();
		        	    $this->setState(145);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ForWhileContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(147);
		        	    $this->match(self::FOR);
		        	    $this->setState(148);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(149);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ForInfiniteContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(151);
		        	    $this->match(self::FOR);
		        	    $this->setState(152);
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
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_switchStmt);

		    try {
		        $localContext = new Context\SwitchStatementContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(155);
		        $this->match(self::SWITCH);
		        $this->setState(156);
		        $this->recursiveExpression(0);
		        $this->setState(157);
		        $this->match(self::T__0);
		        $this->setState(161);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE || $_la === self::DEFAULT) {
		        	$this->setState(158);
		        	$this->switchCase();
		        	$this->setState(163);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(164);
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

		    $this->enterRule($localContext, 24, self::RULE_switchCase);

		    try {
		        $this->setState(183);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$localContext = new Context\CaseBlockContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(166);
		            	$this->match(self::CASE);
		            	$this->setState(167);
		            	$this->expressionList();
		            	$this->setState(168);
		            	$this->match(self::T__6);
		            	$this->setState(172);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		            		$this->setState(169);
		            		$this->instruction();
		            		$this->setState(174);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		            case self::DEFAULT:
		            	$localContext = new Context\DefaultBlockContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(175);
		            	$this->match(self::DEFAULT);
		            	$this->setState(176);
		            	$this->match(self::T__6);
		            	$this->setState(180);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		            		$this->setState(177);
		            		$this->instruction();
		            		$this->setState(182);
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

		    $this->enterRule($localContext, 26, self::RULE_breakStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(185);
		        $this->match(self::BREAK);
		        $this->setState(186);
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

		    $this->enterRule($localContext, 28, self::RULE_continueStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(188);
		        $this->match(self::CONTINUE);
		        $this->setState(189);
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

		    $this->enterRule($localContext, 30, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(191);
		        $this->match(self::FMT);
		        $this->setState(192);
		        $this->match(self::T__2);
		        $this->setState(194);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
		        	$this->setState(193);
		        	$this->expressionList();
		        }
		        $this->setState(196);
		        $this->match(self::T__3);
		        $this->setState(197);
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

		    $this->enterRule($localContext, 32, self::RULE_varDecl);

		    try {
		        $localContext = new Context\VarDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(199);
		        $this->match(self::VAR);
		        $this->setState(200);
		        $this->match(self::ID);
		        $this->setState(201);
		        $this->type();
		        $this->setState(204);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__7) {
		        	$this->setState(202);
		        	$this->match(self::T__7);
		        	$this->setState(203);
		        	$this->recursiveExpression(0);
		        }
		        $this->setState(206);
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

		    $this->enterRule($localContext, 34, self::RULE_constDecl);

		    try {
		        $localContext = new Context\ConstDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(208);
		        $this->match(self::CONST);
		        $this->setState(209);
		        $this->match(self::ID);
		        $this->setState(210);
		        $this->type();
		        $this->setState(211);
		        $this->match(self::T__7);
		        $this->setState(212);
		        $this->recursiveExpression(0);
		        $this->setState(213);
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

		    $this->enterRule($localContext, 36, self::RULE_shortVarDecl);

		    try {
		        $localContext = new Context\ShortVarDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(215);
		        $this->idList();
		        $this->setState(216);
		        $this->match(self::T__8);
		        $this->setState(217);
		        $this->expressionList();
		        $this->setState(218);
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

		    $this->enterRule($localContext, 38, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(220);
		        $this->match(self::ID);
		        $this->setState(225);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(221);
		        	$this->match(self::T__4);
		        	$this->setState(222);
		        	$this->match(self::ID);
		        	$this->setState(227);
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

		    $this->enterRule($localContext, 40, self::RULE_assignStmt);

		    try {
		        $this->setState(250);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\PtrAssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(228);
		        	    $this->match(self::T__9);
		        	    $this->setState(229);
		        	    $this->match(self::ID);
		        	    $this->setState(230);
		        	    $this->match(self::T__7);
		        	    $this->setState(231);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(232);
		        	    $this->stmtTerminator();
		        	break;

		        	case 2:
		        	    $localContext = new Context\AssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(234);
		        	    $this->match(self::ID);
		        	    $this->setState(235);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 263882790666496) !== 0))) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(236);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(237);
		        	    $this->stmtTerminator();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ArrayAssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(239);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(240);
		        	    $this->match(self::T__10);
		        	    $this->setState(241);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(242);
		        	    $this->match(self::T__11);
		        	    $this->setState(243);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 263882790666496) !== 0))) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(244);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(245);
		        	    $this->stmtTerminator();
		        	break;

		        	case 4:
		        	    $localContext = new Context\IncrementDecrementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(247);
		        	    $this->match(self::ID);
		        	    $this->setState(248);

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
		        	    $this->setState(249);
		        	    $this->stmtTerminator();
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

		    $this->enterRule($localContext, 42, self::RULE_stmtTerminator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(252);

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

		    $this->enterRule($localContext, 44, self::RULE_expressionList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(254);
		        $this->recursiveExpression(0);
		        $this->setState(259);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(255);
		        	$this->match(self::T__4);
		        	$this->setState(256);
		        	$this->recursiveExpression(0);
		        	$this->setState(261);
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
			$startState = 46;
			$this->enterRecursionRule($localContext, 46, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(295);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
					case 1:
					    $localContext = new Context\NotExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(263);
					    $this->match(self::T__12);
					    $this->setState(264);
					    $this->recursiveExpression(21);
					break;

					case 2:
					    $localContext = new Context\UnaryMinusExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(265);
					    $this->match(self::T__13);
					    $this->setState(266);
					    $this->recursiveExpression(20);
					break;

					case 3:
					    $localContext = new Context\AddressOfExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(267);
					    $this->match(self::T__14);
					    $this->setState(268);
					    $this->match(self::ID);
					break;

					case 4:
					    $localContext = new Context\DerefExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(269);
					    $this->match(self::T__9);
					    $this->setState(270);
					    $this->recursiveExpression(18);
					break;

					case 5:
					    $localContext = new Context\ArrayLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(271);
					    $this->type();
					    $this->setState(272);
					    $this->match(self::T__0);
					    $this->setState(274);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
					    	$this->setState(273);
					    	$this->expressionList();
					    }
					    $this->setState(276);
					    $this->match(self::T__1);
					break;

					case 6:
					    $localContext = new Context\CallExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(278);
					    $this->match(self::ID);
					    $this->setState(279);
					    $this->match(self::T__2);
					    $this->setState(281);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
					    	$this->setState(280);
					    	$this->expressionList();
					    }
					    $this->setState(283);
					    $this->match(self::T__3);
					break;

					case 7:
					    $localContext = new Context\ParenExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(284);
					    $this->match(self::T__2);
					    $this->setState(285);
					    $this->recursiveExpression(0);
					    $this->setState(286);
					    $this->match(self::T__3);
					break;

					case 8:
					    $localContext = new Context\IdExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(288);
					    $this->match(self::ID);
					break;

					case 9:
					    $localContext = new Context\FloatExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(289);
					    $this->match(self::FLOAT);
					break;

					case 10:
					    $localContext = new Context\RuneExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(290);
					    $this->match(self::RUNE);
					break;

					case 11:
					    $localContext = new Context\NilExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(291);
					    $this->match(self::NIL);
					break;

					case 12:
					    $localContext = new Context\IntExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(292);
					    $this->match(self::INT);
					break;

					case 13:
					    $localContext = new Context\StrExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(293);
					    $this->match(self::STRING);
					break;

					case 14:
					    $localContext = new Context\BoolExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(294);
					    $this->match(self::BOOL);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(322);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(320);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(297);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(298);

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
							    $this->setState(299);
							    $this->recursiveExpression(18);
							break;

							case 2:
							    $localContext = new Context\AddSubExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(300);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(301);

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
							    $this->setState(302);
							    $this->recursiveExpression(17);
							break;

							case 3:
							    $localContext = new Context\RelExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(303);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(304);

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
							    $this->setState(305);
							    $this->recursiveExpression(16);
							break;

							case 4:
							    $localContext = new Context\EqExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(306);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(307);

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
							    $this->setState(308);
							    $this->recursiveExpression(15);
							break;

							case 5:
							    $localContext = new Context\AndExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(309);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(310);
							    $this->match(self::T__24);
							    $this->setState(311);
							    $this->recursiveExpression(14);
							break;

							case 6:
							    $localContext = new Context\OrExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(312);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(313);
							    $this->match(self::T__25);
							    $this->setState(314);
							    $this->recursiveExpression(13);
							break;

							case 7:
							    $localContext = new Context\ArrayAccessExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(315);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(316);
							    $this->match(self::T__10);
							    $this->setState(317);
							    $this->recursiveExpression(0);
							    $this->setState(318);
							    $this->match(self::T__11);
							break;
						} 
					}

					$this->setState(324);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);
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

		    $this->enterRule($localContext, 48, self::RULE_type);

		    try {
		        $this->setState(337);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__26:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(325);
		            	$this->match(self::T__26);
		            	break;

		            case self::T__27:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(326);
		            	$this->match(self::T__27);
		            	break;

		            case self::T__28:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(327);
		            	$this->match(self::T__28);
		            	break;

		            case self::TYPE_STRING:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(328);
		            	$this->match(self::TYPE_STRING);
		            	break;

		            case self::TYPE_BOOL:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(329);
		            	$this->match(self::TYPE_BOOL);
		            	break;

		            case self::T__29:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(330);
		            	$this->match(self::T__29);
		            	break;

		            case self::T__9:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(331);
		            	$this->match(self::T__9);
		            	$this->setState(332);
		            	$this->type();
		            	break;

		            case self::T__10:
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(333);
		            	$this->match(self::T__10);
		            	$this->setState(334);
		            	$this->match(self::INT);
		            	$this->setState(335);
		            	$this->match(self::T__11);
		            	$this->setState(336);
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
					case 23:
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

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
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

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
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

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
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

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
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

	    public function stmtTerminator(): ?StmtTerminatorContext
	    {
	    	return $this->getTypedRuleContext(StmtTerminatorContext::class, 0);
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