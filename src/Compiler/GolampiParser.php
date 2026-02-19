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
			[4, 1, 63, 336, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 1, 0, 5, 0, 52, 8, 0, 10, 0, 12, 0, 55, 9, 0, 1, 0, 1, 
		    0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 76, 8, 1, 1, 2, 1, 2, 
		    5, 2, 80, 8, 2, 10, 2, 12, 2, 83, 9, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 
		    3, 1, 3, 3, 3, 91, 8, 3, 1, 3, 1, 3, 3, 3, 95, 8, 3, 1, 3, 1, 3, 1, 
		    4, 1, 4, 1, 4, 5, 4, 102, 8, 4, 10, 4, 12, 4, 105, 9, 4, 1, 5, 1, 
		    5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 5, 6, 115, 8, 6, 10, 6, 12, 
		    6, 118, 9, 6, 1, 6, 1, 6, 3, 6, 122, 8, 6, 1, 7, 1, 7, 3, 7, 126, 
		    8, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 
		    1, 9, 3, 9, 139, 8, 9, 3, 9, 141, 8, 9, 1, 10, 1, 10, 1, 10, 1, 10, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 3, 
		    10, 156, 8, 10, 1, 11, 1, 11, 1, 11, 1, 11, 5, 11, 162, 8, 11, 10, 
		    11, 12, 11, 165, 9, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 12, 
		    5, 12, 173, 8, 12, 10, 12, 12, 12, 176, 9, 12, 1, 12, 1, 12, 1, 12, 
		    5, 12, 181, 8, 12, 10, 12, 12, 12, 184, 9, 12, 3, 12, 186, 8, 12, 
		    1, 13, 1, 13, 1, 13, 1, 14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 3, 
		    15, 197, 8, 15, 1, 15, 1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 3, 16, 207, 8, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 17, 1, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 19, 1, 19, 
		    1, 19, 5, 19, 226, 8, 19, 10, 19, 12, 19, 229, 9, 19, 1, 20, 1, 20, 
		    1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 
		    20, 1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 247, 8, 20, 1, 21, 1, 21, 1, 
		    22, 1, 22, 1, 22, 5, 22, 254, 8, 22, 10, 22, 12, 22, 257, 9, 22, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 
		    1, 23, 1, 23, 3, 23, 271, 8, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 
		    3, 23, 278, 8, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 
		    1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 23, 292, 8, 23, 1, 23, 1, 23, 
		    1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 
		    1, 23, 1, 23, 5, 23, 317, 8, 23, 10, 23, 12, 23, 320, 9, 23, 1, 24, 
		    1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 
		    24, 1, 24, 3, 24, 334, 8, 24, 1, 24, 0, 1, 46, 25, 0, 2, 4, 6, 8, 
		    10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 
		    44, 46, 48, 0, 7, 2, 0, 8, 8, 44, 47, 1, 0, 48, 49, 2, 1, 6, 6, 63, 
		    63, 2, 0, 10, 10, 16, 17, 2, 0, 14, 14, 18, 18, 1, 0, 19, 22, 1, 0, 
		    23, 24, 376, 0, 53, 1, 0, 0, 0, 2, 75, 1, 0, 0, 0, 4, 77, 1, 0, 0, 
		    0, 6, 86, 1, 0, 0, 0, 8, 98, 1, 0, 0, 0, 10, 106, 1, 0, 0, 0, 12, 
		    121, 1, 0, 0, 0, 14, 123, 1, 0, 0, 0, 16, 129, 1, 0, 0, 0, 18, 132, 
		    1, 0, 0, 0, 20, 155, 1, 0, 0, 0, 22, 157, 1, 0, 0, 0, 24, 185, 1, 
		    0, 0, 0, 26, 187, 1, 0, 0, 0, 28, 190, 1, 0, 0, 0, 30, 193, 1, 0, 
		    0, 0, 32, 201, 1, 0, 0, 0, 34, 210, 1, 0, 0, 0, 36, 217, 1, 0, 0, 
		    0, 38, 222, 1, 0, 0, 0, 40, 246, 1, 0, 0, 0, 42, 248, 1, 0, 0, 0, 
		    44, 250, 1, 0, 0, 0, 46, 291, 1, 0, 0, 0, 48, 333, 1, 0, 0, 0, 50, 
		    52, 3, 2, 1, 0, 51, 50, 1, 0, 0, 0, 52, 55, 1, 0, 0, 0, 53, 51, 1, 
		    0, 0, 0, 53, 54, 1, 0, 0, 0, 54, 56, 1, 0, 0, 0, 55, 53, 1, 0, 0, 
		    0, 56, 57, 5, 0, 0, 1, 57, 1, 1, 0, 0, 0, 58, 76, 3, 6, 3, 0, 59, 
		    76, 3, 30, 15, 0, 60, 76, 3, 32, 16, 0, 61, 76, 3, 34, 17, 0, 62, 
		    76, 3, 36, 18, 0, 63, 64, 3, 40, 20, 0, 64, 65, 3, 42, 21, 0, 65, 
		    76, 1, 0, 0, 0, 66, 76, 3, 18, 9, 0, 67, 76, 3, 22, 11, 0, 68, 76, 
		    3, 20, 10, 0, 69, 76, 3, 26, 13, 0, 70, 76, 3, 28, 14, 0, 71, 76, 
		    3, 14, 7, 0, 72, 76, 3, 16, 8, 0, 73, 76, 3, 4, 2, 0, 74, 76, 5, 63, 
		    0, 0, 75, 58, 1, 0, 0, 0, 75, 59, 1, 0, 0, 0, 75, 60, 1, 0, 0, 0, 
		    75, 61, 1, 0, 0, 0, 75, 62, 1, 0, 0, 0, 75, 63, 1, 0, 0, 0, 75, 66, 
		    1, 0, 0, 0, 75, 67, 1, 0, 0, 0, 75, 68, 1, 0, 0, 0, 75, 69, 1, 0, 
		    0, 0, 75, 70, 1, 0, 0, 0, 75, 71, 1, 0, 0, 0, 75, 72, 1, 0, 0, 0, 
		    75, 73, 1, 0, 0, 0, 75, 74, 1, 0, 0, 0, 76, 3, 1, 0, 0, 0, 77, 81, 
		    5, 1, 0, 0, 78, 80, 3, 2, 1, 0, 79, 78, 1, 0, 0, 0, 80, 83, 1, 0, 
		    0, 0, 81, 79, 1, 0, 0, 0, 81, 82, 1, 0, 0, 0, 82, 84, 1, 0, 0, 0, 
		    83, 81, 1, 0, 0, 0, 84, 85, 5, 2, 0, 0, 85, 5, 1, 0, 0, 0, 86, 87, 
		    5, 38, 0, 0, 87, 88, 5, 54, 0, 0, 88, 90, 5, 3, 0, 0, 89, 91, 3, 8, 
		    4, 0, 90, 89, 1, 0, 0, 0, 90, 91, 1, 0, 0, 0, 91, 92, 1, 0, 0, 0, 
		    92, 94, 5, 4, 0, 0, 93, 95, 3, 12, 6, 0, 94, 93, 1, 0, 0, 0, 94, 95, 
		    1, 0, 0, 0, 95, 96, 1, 0, 0, 0, 96, 97, 3, 4, 2, 0, 97, 7, 1, 0, 0, 
		    0, 98, 103, 3, 10, 5, 0, 99, 100, 5, 5, 0, 0, 100, 102, 3, 10, 5, 
		    0, 101, 99, 1, 0, 0, 0, 102, 105, 1, 0, 0, 0, 103, 101, 1, 0, 0, 0, 
		    103, 104, 1, 0, 0, 0, 104, 9, 1, 0, 0, 0, 105, 103, 1, 0, 0, 0, 106, 
		    107, 5, 54, 0, 0, 107, 108, 3, 48, 24, 0, 108, 11, 1, 0, 0, 0, 109, 
		    122, 3, 48, 24, 0, 110, 111, 5, 3, 0, 0, 111, 116, 3, 48, 24, 0, 112, 
		    113, 5, 5, 0, 0, 113, 115, 3, 48, 24, 0, 114, 112, 1, 0, 0, 0, 115, 
		    118, 1, 0, 0, 0, 116, 114, 1, 0, 0, 0, 116, 117, 1, 0, 0, 0, 117, 
		    119, 1, 0, 0, 0, 118, 116, 1, 0, 0, 0, 119, 120, 5, 4, 0, 0, 120, 
		    122, 1, 0, 0, 0, 121, 109, 1, 0, 0, 0, 121, 110, 1, 0, 0, 0, 122, 
		    13, 1, 0, 0, 0, 123, 125, 5, 39, 0, 0, 124, 126, 3, 44, 22, 0, 125, 
		    124, 1, 0, 0, 0, 125, 126, 1, 0, 0, 0, 126, 127, 1, 0, 0, 0, 127, 
		    128, 3, 42, 21, 0, 128, 15, 1, 0, 0, 0, 129, 130, 3, 46, 23, 0, 130, 
		    131, 3, 42, 21, 0, 131, 17, 1, 0, 0, 0, 132, 133, 5, 33, 0, 0, 133, 
		    134, 3, 46, 23, 0, 134, 140, 3, 4, 2, 0, 135, 138, 5, 34, 0, 0, 136, 
		    139, 3, 4, 2, 0, 137, 139, 3, 18, 9, 0, 138, 136, 1, 0, 0, 0, 138, 
		    137, 1, 0, 0, 0, 139, 141, 1, 0, 0, 0, 140, 135, 1, 0, 0, 0, 140, 
		    141, 1, 0, 0, 0, 141, 19, 1, 0, 0, 0, 142, 143, 5, 35, 0, 0, 143, 
		    144, 3, 32, 16, 0, 144, 145, 3, 46, 23, 0, 145, 146, 5, 6, 0, 0, 146, 
		    147, 3, 40, 20, 0, 147, 148, 3, 4, 2, 0, 148, 156, 1, 0, 0, 0, 149, 
		    150, 5, 35, 0, 0, 150, 151, 3, 46, 23, 0, 151, 152, 3, 4, 2, 0, 152, 
		    156, 1, 0, 0, 0, 153, 154, 5, 35, 0, 0, 154, 156, 3, 4, 2, 0, 155, 
		    142, 1, 0, 0, 0, 155, 149, 1, 0, 0, 0, 155, 153, 1, 0, 0, 0, 156, 
		    21, 1, 0, 0, 0, 157, 158, 5, 41, 0, 0, 158, 159, 3, 46, 23, 0, 159, 
		    163, 5, 1, 0, 0, 160, 162, 3, 24, 12, 0, 161, 160, 1, 0, 0, 0, 162, 
		    165, 1, 0, 0, 0, 163, 161, 1, 0, 0, 0, 163, 164, 1, 0, 0, 0, 164, 
		    166, 1, 0, 0, 0, 165, 163, 1, 0, 0, 0, 166, 167, 5, 2, 0, 0, 167, 
		    23, 1, 0, 0, 0, 168, 169, 5, 42, 0, 0, 169, 170, 3, 44, 22, 0, 170, 
		    174, 5, 7, 0, 0, 171, 173, 3, 2, 1, 0, 172, 171, 1, 0, 0, 0, 173, 
		    176, 1, 0, 0, 0, 174, 172, 1, 0, 0, 0, 174, 175, 1, 0, 0, 0, 175, 
		    186, 1, 0, 0, 0, 176, 174, 1, 0, 0, 0, 177, 178, 5, 43, 0, 0, 178, 
		    182, 5, 7, 0, 0, 179, 181, 3, 2, 1, 0, 180, 179, 1, 0, 0, 0, 181, 
		    184, 1, 0, 0, 0, 182, 180, 1, 0, 0, 0, 182, 183, 1, 0, 0, 0, 183, 
		    186, 1, 0, 0, 0, 184, 182, 1, 0, 0, 0, 185, 168, 1, 0, 0, 0, 185, 
		    177, 1, 0, 0, 0, 186, 25, 1, 0, 0, 0, 187, 188, 5, 36, 0, 0, 188, 
		    189, 3, 42, 21, 0, 189, 27, 1, 0, 0, 0, 190, 191, 5, 37, 0, 0, 191, 
		    192, 3, 42, 21, 0, 192, 29, 1, 0, 0, 0, 193, 194, 5, 32, 0, 0, 194, 
		    196, 5, 3, 0, 0, 195, 197, 3, 44, 22, 0, 196, 195, 1, 0, 0, 0, 196, 
		    197, 1, 0, 0, 0, 197, 198, 1, 0, 0, 0, 198, 199, 5, 4, 0, 0, 199, 
		    200, 3, 42, 21, 0, 200, 31, 1, 0, 0, 0, 201, 202, 5, 31, 0, 0, 202, 
		    203, 5, 54, 0, 0, 203, 206, 3, 48, 24, 0, 204, 205, 5, 8, 0, 0, 205, 
		    207, 3, 46, 23, 0, 206, 204, 1, 0, 0, 0, 206, 207, 1, 0, 0, 0, 207, 
		    208, 1, 0, 0, 0, 208, 209, 3, 42, 21, 0, 209, 33, 1, 0, 0, 0, 210, 
		    211, 5, 40, 0, 0, 211, 212, 5, 54, 0, 0, 212, 213, 3, 48, 24, 0, 213, 
		    214, 5, 8, 0, 0, 214, 215, 3, 46, 23, 0, 215, 216, 3, 42, 21, 0, 216, 
		    35, 1, 0, 0, 0, 217, 218, 3, 38, 19, 0, 218, 219, 5, 9, 0, 0, 219, 
		    220, 3, 44, 22, 0, 220, 221, 3, 42, 21, 0, 221, 37, 1, 0, 0, 0, 222, 
		    227, 5, 54, 0, 0, 223, 224, 5, 5, 0, 0, 224, 226, 5, 54, 0, 0, 225, 
		    223, 1, 0, 0, 0, 226, 229, 1, 0, 0, 0, 227, 225, 1, 0, 0, 0, 227, 
		    228, 1, 0, 0, 0, 228, 39, 1, 0, 0, 0, 229, 227, 1, 0, 0, 0, 230, 231, 
		    5, 10, 0, 0, 231, 232, 5, 54, 0, 0, 232, 233, 5, 8, 0, 0, 233, 247, 
		    3, 46, 23, 0, 234, 235, 5, 54, 0, 0, 235, 236, 7, 0, 0, 0, 236, 247, 
		    3, 46, 23, 0, 237, 238, 3, 46, 23, 0, 238, 239, 5, 11, 0, 0, 239, 
		    240, 3, 46, 23, 0, 240, 241, 5, 12, 0, 0, 241, 242, 7, 0, 0, 0, 242, 
		    243, 3, 46, 23, 0, 243, 247, 1, 0, 0, 0, 244, 245, 5, 54, 0, 0, 245, 
		    247, 7, 1, 0, 0, 246, 230, 1, 0, 0, 0, 246, 234, 1, 0, 0, 0, 246, 
		    237, 1, 0, 0, 0, 246, 244, 1, 0, 0, 0, 247, 41, 1, 0, 0, 0, 248, 249, 
		    7, 2, 0, 0, 249, 43, 1, 0, 0, 0, 250, 255, 3, 46, 23, 0, 251, 252, 
		    5, 5, 0, 0, 252, 254, 3, 46, 23, 0, 253, 251, 1, 0, 0, 0, 254, 257, 
		    1, 0, 0, 0, 255, 253, 1, 0, 0, 0, 255, 256, 1, 0, 0, 0, 256, 45, 1, 
		    0, 0, 0, 257, 255, 1, 0, 0, 0, 258, 259, 6, 23, -1, 0, 259, 260, 5, 
		    13, 0, 0, 260, 292, 3, 46, 23, 21, 261, 262, 5, 14, 0, 0, 262, 292, 
		    3, 46, 23, 20, 263, 264, 5, 15, 0, 0, 264, 292, 5, 54, 0, 0, 265, 
		    266, 5, 10, 0, 0, 266, 292, 3, 46, 23, 18, 267, 268, 3, 48, 24, 0, 
		    268, 270, 5, 1, 0, 0, 269, 271, 3, 44, 22, 0, 270, 269, 1, 0, 0, 0, 
		    270, 271, 1, 0, 0, 0, 271, 272, 1, 0, 0, 0, 272, 273, 5, 2, 0, 0, 
		    273, 292, 1, 0, 0, 0, 274, 275, 5, 54, 0, 0, 275, 277, 5, 3, 0, 0, 
		    276, 278, 3, 44, 22, 0, 277, 276, 1, 0, 0, 0, 277, 278, 1, 0, 0, 0, 
		    278, 279, 1, 0, 0, 0, 279, 292, 5, 4, 0, 0, 280, 281, 5, 3, 0, 0, 
		    281, 282, 3, 46, 23, 0, 282, 283, 5, 4, 0, 0, 283, 292, 1, 0, 0, 0, 
		    284, 292, 5, 54, 0, 0, 285, 292, 5, 55, 0, 0, 286, 292, 5, 56, 0, 
		    0, 287, 292, 5, 57, 0, 0, 288, 292, 5, 58, 0, 0, 289, 292, 5, 59, 
		    0, 0, 290, 292, 5, 53, 0, 0, 291, 258, 1, 0, 0, 0, 291, 261, 1, 0, 
		    0, 0, 291, 263, 1, 0, 0, 0, 291, 265, 1, 0, 0, 0, 291, 267, 1, 0, 
		    0, 0, 291, 274, 1, 0, 0, 0, 291, 280, 1, 0, 0, 0, 291, 284, 1, 0, 
		    0, 0, 291, 285, 1, 0, 0, 0, 291, 286, 1, 0, 0, 0, 291, 287, 1, 0, 
		    0, 0, 291, 288, 1, 0, 0, 0, 291, 289, 1, 0, 0, 0, 291, 290, 1, 0, 
		    0, 0, 292, 318, 1, 0, 0, 0, 293, 294, 10, 17, 0, 0, 294, 295, 7, 3, 
		    0, 0, 295, 317, 3, 46, 23, 18, 296, 297, 10, 16, 0, 0, 297, 298, 7, 
		    4, 0, 0, 298, 317, 3, 46, 23, 17, 299, 300, 10, 15, 0, 0, 300, 301, 
		    7, 5, 0, 0, 301, 317, 3, 46, 23, 16, 302, 303, 10, 14, 0, 0, 303, 
		    304, 7, 6, 0, 0, 304, 317, 3, 46, 23, 15, 305, 306, 10, 13, 0, 0, 
		    306, 307, 5, 25, 0, 0, 307, 317, 3, 46, 23, 14, 308, 309, 10, 12, 
		    0, 0, 309, 310, 5, 26, 0, 0, 310, 317, 3, 46, 23, 13, 311, 312, 10, 
		    9, 0, 0, 312, 313, 5, 11, 0, 0, 313, 314, 3, 46, 23, 0, 314, 315, 
		    5, 12, 0, 0, 315, 317, 1, 0, 0, 0, 316, 293, 1, 0, 0, 0, 316, 296, 
		    1, 0, 0, 0, 316, 299, 1, 0, 0, 0, 316, 302, 1, 0, 0, 0, 316, 305, 
		    1, 0, 0, 0, 316, 308, 1, 0, 0, 0, 316, 311, 1, 0, 0, 0, 317, 320, 
		    1, 0, 0, 0, 318, 316, 1, 0, 0, 0, 318, 319, 1, 0, 0, 0, 319, 47, 1, 
		    0, 0, 0, 320, 318, 1, 0, 0, 0, 321, 334, 5, 27, 0, 0, 322, 334, 5, 
		    28, 0, 0, 323, 334, 5, 29, 0, 0, 324, 334, 5, 51, 0, 0, 325, 334, 
		    5, 52, 0, 0, 326, 334, 5, 30, 0, 0, 327, 328, 5, 10, 0, 0, 328, 334, 
		    3, 48, 24, 0, 329, 330, 5, 11, 0, 0, 330, 331, 5, 58, 0, 0, 331, 332, 
		    5, 12, 0, 0, 332, 334, 3, 48, 24, 0, 333, 321, 1, 0, 0, 0, 333, 322, 
		    1, 0, 0, 0, 333, 323, 1, 0, 0, 0, 333, 324, 1, 0, 0, 0, 333, 325, 
		    1, 0, 0, 0, 333, 326, 1, 0, 0, 0, 333, 327, 1, 0, 0, 0, 333, 329, 
		    1, 0, 0, 0, 334, 49, 1, 0, 0, 0, 27, 53, 75, 81, 90, 94, 103, 116, 
		    121, 125, 138, 140, 155, 163, 174, 182, 185, 196, 206, 227, 246, 255, 
		    270, 277, 291, 316, 318, 333];
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
		        $this->setState(75);
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
		        	    $this->setState(64);
		        	    $this->stmtTerminator();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(66);
		        	    $this->ifStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(67);
		        	    $this->switchStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(68);
		        	    $this->forStmt();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(69);
		        	    $this->breakStmt();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(70);
		        	    $this->continueStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(71);
		        	    $this->returnStmt();
		        	break;

		        	case 13:
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(72);
		        	    $this->exprStmt();
		        	break;

		        	case 14:
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(73);
		        	    $this->block();
		        	break;

		        	case 15:
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(74);
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
		        $this->setState(77);
		        $this->match(self::T__0);
		        $this->setState(81);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		        	$this->setState(78);
		        	$this->instruction();
		        	$this->setState(83);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(84);
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
		        $this->setState(86);
		        $this->match(self::FUNC);
		        $this->setState(87);
		        $this->match(self::ID);
		        $this->setState(88);
		        $this->match(self::T__2);
		        $this->setState(90);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(89);
		        	$this->paramList();
		        }
		        $this->setState(92);
		        $this->match(self::T__3);
		        $this->setState(94);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 6755401454324744) !== 0)) {
		        	$this->setState(93);
		        	$this->typeList();
		        }
		        $this->setState(96);
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
		        $this->setState(98);
		        $this->param();
		        $this->setState(103);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(99);
		        	$this->match(self::T__4);
		        	$this->setState(100);
		        	$this->param();
		        	$this->setState(105);
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
		        $this->setState(106);
		        $this->match(self::ID);
		        $this->setState(107);
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
		        $this->setState(121);
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
		            	$this->setState(109);
		            	$this->type();
		            	break;

		            case self::T__2:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(110);
		            	$this->match(self::T__2);
		            	$this->setState(111);
		            	$this->type();
		            	$this->setState(116);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::T__4) {
		            		$this->setState(112);
		            		$this->match(self::T__4);
		            		$this->setState(113);
		            		$this->type();
		            		$this->setState(118);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(119);
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
		        $this->setState(123);
		        $this->match(self::RETURN);
		        $this->setState(125);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
		        	$this->setState(124);
		        	$this->expressionList();
		        }
		        $this->setState(127);
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
		        $this->setState(129);
		        $this->recursiveExpression(0);
		        $this->setState(130);
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
		        $this->setState(132);
		        $this->match(self::IF);
		        $this->setState(133);
		        $this->recursiveExpression(0);
		        $this->setState(134);
		        $this->block();
		        $this->setState(140);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(135);
		        	$this->match(self::ELSE);
		        	$this->setState(138);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__0:
		        	    	$this->setState(136);
		        	    	$this->block();
		        	    	break;

		        	    case self::IF:
		        	    	$this->setState(137);
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
		        $this->setState(155);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ForClassicContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(142);
		        	    $this->match(self::FOR);
		        	    $this->setState(143);
		        	    $this->varDecl();
		        	    $this->setState(144);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(145);
		        	    $this->match(self::T__5);
		        	    $this->setState(146);
		        	    $this->assignStmt();
		        	    $this->setState(147);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ForWhileContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(149);
		        	    $this->match(self::FOR);
		        	    $this->setState(150);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(151);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ForInfiniteContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(153);
		        	    $this->match(self::FOR);
		        	    $this->setState(154);
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
		        $this->setState(157);
		        $this->match(self::SWITCH);
		        $this->setState(158);
		        $this->recursiveExpression(0);
		        $this->setState(159);
		        $this->match(self::T__0);
		        $this->setState(163);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE || $_la === self::DEFAULT) {
		        	$this->setState(160);
		        	$this->switchCase();
		        	$this->setState(165);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(166);
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
		        $this->setState(185);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$localContext = new Context\CaseBlockContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(168);
		            	$this->match(self::CASE);
		            	$this->setState(169);
		            	$this->expressionList();
		            	$this->setState(170);
		            	$this->match(self::T__6);
		            	$this->setState(174);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		            		$this->setState(171);
		            		$this->instruction();
		            		$this->setState(176);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		            case self::DEFAULT:
		            	$localContext = new Context\DefaultBlockContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(177);
		            	$this->match(self::DEFAULT);
		            	$this->setState(178);
		            	$this->match(self::T__6);
		            	$this->setState(182);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & -8072697951329129462) !== 0)) {
		            		$this->setState(179);
		            		$this->instruction();
		            		$this->setState(184);
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
		        $this->setState(187);
		        $this->match(self::BREAK);
		        $this->setState(188);
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
		        $this->setState(190);
		        $this->match(self::CONTINUE);
		        $this->setState(191);
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
		        $this->setState(193);
		        $this->match(self::FMT);
		        $this->setState(194);
		        $this->match(self::T__2);
		        $this->setState(196);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
		        	$this->setState(195);
		        	$this->expressionList();
		        }
		        $this->setState(198);
		        $this->match(self::T__3);
		        $this->setState(199);
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
		        $this->setState(201);
		        $this->match(self::VAR);
		        $this->setState(202);
		        $this->match(self::ID);
		        $this->setState(203);
		        $this->type();
		        $this->setState(206);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__7) {
		        	$this->setState(204);
		        	$this->match(self::T__7);
		        	$this->setState(205);
		        	$this->recursiveExpression(0);
		        }
		        $this->setState(208);
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
		        $this->setState(210);
		        $this->match(self::CONST);
		        $this->setState(211);
		        $this->match(self::ID);
		        $this->setState(212);
		        $this->type();
		        $this->setState(213);
		        $this->match(self::T__7);
		        $this->setState(214);
		        $this->recursiveExpression(0);
		        $this->setState(215);
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
		        $this->setState(217);
		        $this->idList();
		        $this->setState(218);
		        $this->match(self::T__8);
		        $this->setState(219);
		        $this->expressionList();
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
		public function idList(): Context\IdListContext
		{
		    $localContext = new Context\IdListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(222);
		        $this->match(self::ID);
		        $this->setState(227);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(223);
		        	$this->match(self::T__4);
		        	$this->setState(224);
		        	$this->match(self::ID);
		        	$this->setState(229);
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
		        $this->setState(246);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\PtrAssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(230);
		        	    $this->match(self::T__9);
		        	    $this->setState(231);
		        	    $this->match(self::ID);
		        	    $this->setState(232);
		        	    $this->match(self::T__7);
		        	    $this->setState(233);
		        	    $this->recursiveExpression(0);
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
		        	break;

		        	case 3:
		        	    $localContext = new Context\ArrayAssignmentContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(237);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(238);
		        	    $this->match(self::T__10);
		        	    $this->setState(239);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(240);
		        	    $this->match(self::T__11);
		        	    $this->setState(241);

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
		        	    $this->setState(242);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 4:
		        	    $localContext = new Context\IncrementDecrementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(244);
		        	    $this->match(self::ID);
		        	    $this->setState(245);

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

		    $this->enterRule($localContext, 42, self::RULE_stmtTerminator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(248);

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
		        $this->setState(250);
		        $this->recursiveExpression(0);
		        $this->setState(255);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(251);
		        	$this->match(self::T__4);
		        	$this->setState(252);
		        	$this->recursiveExpression(0);
		        	$this->setState(257);
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
				$this->setState(291);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
					case 1:
					    $localContext = new Context\NotExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(259);
					    $this->match(self::T__12);
					    $this->setState(260);
					    $this->recursiveExpression(21);
					break;

					case 2:
					    $localContext = new Context\UnaryMinusExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(261);
					    $this->match(self::T__13);
					    $this->setState(262);
					    $this->recursiveExpression(20);
					break;

					case 3:
					    $localContext = new Context\AddressOfExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(263);
					    $this->match(self::T__14);
					    $this->setState(264);
					    $this->match(self::ID);
					break;

					case 4:
					    $localContext = new Context\DerefExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(265);
					    $this->match(self::T__9);
					    $this->setState(266);
					    $this->recursiveExpression(18);
					break;

					case 5:
					    $localContext = new Context\ArrayLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(267);
					    $this->type();
					    $this->setState(268);
					    $this->match(self::T__0);
					    $this->setState(270);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
					    	$this->setState(269);
					    	$this->expressionList();
					    }
					    $this->setState(272);
					    $this->match(self::T__1);
					break;

					case 6:
					    $localContext = new Context\CallExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(274);
					    $this->match(self::ID);
					    $this->setState(275);
					    $this->match(self::T__2);
					    $this->setState(277);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1150669706806488072) !== 0)) {
					    	$this->setState(276);
					    	$this->expressionList();
					    }
					    $this->setState(279);
					    $this->match(self::T__3);
					break;

					case 7:
					    $localContext = new Context\ParenExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(280);
					    $this->match(self::T__2);
					    $this->setState(281);
					    $this->recursiveExpression(0);
					    $this->setState(282);
					    $this->match(self::T__3);
					break;

					case 8:
					    $localContext = new Context\IdExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(284);
					    $this->match(self::ID);
					break;

					case 9:
					    $localContext = new Context\FloatExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(285);
					    $this->match(self::FLOAT);
					break;

					case 10:
					    $localContext = new Context\RuneExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(286);
					    $this->match(self::RUNE);
					break;

					case 11:
					    $localContext = new Context\NilExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(287);
					    $this->match(self::NIL);
					break;

					case 12:
					    $localContext = new Context\IntExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(288);
					    $this->match(self::INT);
					break;

					case 13:
					    $localContext = new Context\StrExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(289);
					    $this->match(self::STRING);
					break;

					case 14:
					    $localContext = new Context\BoolExprContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(290);
					    $this->match(self::BOOL);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(318);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(316);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(293);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(294);

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
							    $this->setState(295);
							    $this->recursiveExpression(18);
							break;

							case 2:
							    $localContext = new Context\AddSubExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(296);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(297);

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
							    $this->setState(298);
							    $this->recursiveExpression(17);
							break;

							case 3:
							    $localContext = new Context\RelExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(299);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(300);

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
							    $this->setState(301);
							    $this->recursiveExpression(16);
							break;

							case 4:
							    $localContext = new Context\EqExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(302);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(303);

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
							    $this->setState(304);
							    $this->recursiveExpression(15);
							break;

							case 5:
							    $localContext = new Context\AndExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(305);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(306);
							    $this->match(self::T__24);
							    $this->setState(307);
							    $this->recursiveExpression(14);
							break;

							case 6:
							    $localContext = new Context\OrExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(308);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(309);
							    $this->match(self::T__25);
							    $this->setState(310);
							    $this->recursiveExpression(13);
							break;

							case 7:
							    $localContext = new Context\ArrayAccessExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(311);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(312);
							    $this->match(self::T__10);
							    $this->setState(313);
							    $this->recursiveExpression(0);
							    $this->setState(314);
							    $this->match(self::T__11);
							break;
						} 
					}

					$this->setState(320);
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
		        $this->setState(333);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__26:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(321);
		            	$this->match(self::T__26);
		            	break;

		            case self::T__27:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(322);
		            	$this->match(self::T__27);
		            	break;

		            case self::T__28:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(323);
		            	$this->match(self::T__28);
		            	break;

		            case self::TYPE_STRING:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(324);
		            	$this->match(self::TYPE_STRING);
		            	break;

		            case self::TYPE_BOOL:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(325);
		            	$this->match(self::TYPE_BOOL);
		            	break;

		            case self::T__29:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(326);
		            	$this->match(self::T__29);
		            	break;

		            case self::T__9:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(327);
		            	$this->match(self::T__9);
		            	$this->setState(328);
		            	$this->type();
		            	break;

		            case self::T__10:
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(329);
		            	$this->match(self::T__10);
		            	$this->setState(330);
		            	$this->match(self::INT);
		            	$this->setState(331);
		            	$this->match(self::T__11);
		            	$this->setState(332);
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