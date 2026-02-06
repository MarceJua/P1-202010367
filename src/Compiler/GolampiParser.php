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
               T__22 = 23, VAR = 24, FMT = 25, IF = 26, ELSE = 27, TYPE_INT = 28, 
               TYPE_STRING = 29, TYPE_BOOL = 30, BOOL = 31, ID = 32, INT = 33, 
               STRING = 34, COMMENT = 35, WS = 36, NEWLINE = 37;

		public const RULE_file = 0, RULE_instruction = 1, RULE_block = 2, RULE_ifStmt = 3, 
               RULE_printStmt = 4, RULE_varDecl = 5, RULE_assignStmt = 6, 
               RULE_expressionList = 7, RULE_expression = 8, RULE_type = 9, 
               RULE_stmtTerminator = 10;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'file', 'instruction', 'block', 'ifStmt', 'printStmt', 'varDecl', 'assignStmt', 
			'expressionList', 'expression', 'type', 'stmtTerminator'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'{'", "'}'", "'('", "')'", "'='", "','", "'!'", "'-'", "'*'", 
		    "'/'", "'%'", "'+'", "'<'", "'<='", "'>'", "'>='", "'=='", "'!='", 
		    "'&&'", "'||'", "'int'", "'int32'", "';'", "'var'", "'fmt.Println'", 
		    "'if'", "'else'", null, "'string'", "'bool'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, "VAR", "FMT", "IF", "ELSE", "TYPE_INT", "TYPE_STRING", 
		    "TYPE_BOOL", "BOOL", "ID", "INT", "STRING", "COMMENT", "WS", "NEWLINE"
		];

		private const SERIALIZED_ATN =
			[4, 1, 37, 129, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 1, 0, 5, 0, 24, 8, 0, 10, 0, 12, 0, 27, 9, 0, 1, 0, 
		    1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 36, 8, 1, 1, 2, 1, 2, 5, 
		    2, 40, 8, 2, 10, 2, 12, 2, 43, 9, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 
		    1, 3, 1, 3, 1, 3, 3, 3, 53, 8, 3, 3, 3, 55, 8, 3, 1, 4, 1, 4, 1, 4, 
		    3, 4, 60, 8, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 3, 
		    5, 70, 8, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 
		    1, 7, 5, 7, 82, 8, 7, 10, 7, 12, 7, 85, 9, 7, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 100, 
		    8, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 
		    1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 5, 8, 120, 8, 8, 10, 
		    8, 12, 8, 123, 9, 8, 1, 9, 1, 9, 1, 10, 1, 10, 1, 10, 0, 1, 16, 11, 
		    0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 0, 6, 1, 0, 9, 11, 2, 0, 8, 
		    8, 12, 12, 1, 0, 13, 16, 1, 0, 17, 18, 2, 0, 21, 22, 29, 30, 2, 1, 
		    23, 23, 37, 37, 140, 0, 25, 1, 0, 0, 0, 2, 35, 1, 0, 0, 0, 4, 37, 
		    1, 0, 0, 0, 6, 46, 1, 0, 0, 0, 8, 56, 1, 0, 0, 0, 10, 64, 1, 0, 0, 
		    0, 12, 73, 1, 0, 0, 0, 14, 78, 1, 0, 0, 0, 16, 99, 1, 0, 0, 0, 18, 
		    124, 1, 0, 0, 0, 20, 126, 1, 0, 0, 0, 22, 24, 3, 2, 1, 0, 23, 22, 
		    1, 0, 0, 0, 24, 27, 1, 0, 0, 0, 25, 23, 1, 0, 0, 0, 25, 26, 1, 0, 
		    0, 0, 26, 28, 1, 0, 0, 0, 27, 25, 1, 0, 0, 0, 28, 29, 5, 0, 0, 1, 
		    29, 1, 1, 0, 0, 0, 30, 36, 3, 8, 4, 0, 31, 36, 3, 10, 5, 0, 32, 36, 
		    3, 12, 6, 0, 33, 36, 3, 6, 3, 0, 34, 36, 3, 4, 2, 0, 35, 30, 1, 0, 
		    0, 0, 35, 31, 1, 0, 0, 0, 35, 32, 1, 0, 0, 0, 35, 33, 1, 0, 0, 0, 
		    35, 34, 1, 0, 0, 0, 36, 3, 1, 0, 0, 0, 37, 41, 5, 1, 0, 0, 38, 40, 
		    3, 2, 1, 0, 39, 38, 1, 0, 0, 0, 40, 43, 1, 0, 0, 0, 41, 39, 1, 0, 
		    0, 0, 41, 42, 1, 0, 0, 0, 42, 44, 1, 0, 0, 0, 43, 41, 1, 0, 0, 0, 
		    44, 45, 5, 2, 0, 0, 45, 5, 1, 0, 0, 0, 46, 47, 5, 26, 0, 0, 47, 48, 
		    3, 16, 8, 0, 48, 54, 3, 4, 2, 0, 49, 52, 5, 27, 0, 0, 50, 53, 3, 4, 
		    2, 0, 51, 53, 3, 6, 3, 0, 52, 50, 1, 0, 0, 0, 52, 51, 1, 0, 0, 0, 
		    53, 55, 1, 0, 0, 0, 54, 49, 1, 0, 0, 0, 54, 55, 1, 0, 0, 0, 55, 7, 
		    1, 0, 0, 0, 56, 57, 5, 25, 0, 0, 57, 59, 5, 3, 0, 0, 58, 60, 3, 14, 
		    7, 0, 59, 58, 1, 0, 0, 0, 59, 60, 1, 0, 0, 0, 60, 61, 1, 0, 0, 0, 
		    61, 62, 5, 4, 0, 0, 62, 63, 3, 20, 10, 0, 63, 9, 1, 0, 0, 0, 64, 65, 
		    5, 24, 0, 0, 65, 66, 5, 32, 0, 0, 66, 69, 3, 18, 9, 0, 67, 68, 5, 
		    5, 0, 0, 68, 70, 3, 16, 8, 0, 69, 67, 1, 0, 0, 0, 69, 70, 1, 0, 0, 
		    0, 70, 71, 1, 0, 0, 0, 71, 72, 3, 20, 10, 0, 72, 11, 1, 0, 0, 0, 73, 
		    74, 5, 32, 0, 0, 74, 75, 5, 5, 0, 0, 75, 76, 3, 16, 8, 0, 76, 77, 
		    3, 20, 10, 0, 77, 13, 1, 0, 0, 0, 78, 83, 3, 16, 8, 0, 79, 80, 5, 
		    6, 0, 0, 80, 82, 3, 16, 8, 0, 81, 79, 1, 0, 0, 0, 82, 85, 1, 0, 0, 
		    0, 83, 81, 1, 0, 0, 0, 83, 84, 1, 0, 0, 0, 84, 15, 1, 0, 0, 0, 85, 
		    83, 1, 0, 0, 0, 86, 87, 6, 8, -1, 0, 87, 88, 5, 7, 0, 0, 88, 100, 
		    3, 16, 8, 13, 89, 90, 5, 8, 0, 0, 90, 100, 3, 16, 8, 12, 91, 92, 5, 
		    3, 0, 0, 92, 93, 3, 16, 8, 0, 93, 94, 5, 4, 0, 0, 94, 100, 1, 0, 0, 
		    0, 95, 100, 5, 32, 0, 0, 96, 100, 5, 33, 0, 0, 97, 100, 5, 34, 0, 
		    0, 98, 100, 5, 31, 0, 0, 99, 86, 1, 0, 0, 0, 99, 89, 1, 0, 0, 0, 99, 
		    91, 1, 0, 0, 0, 99, 95, 1, 0, 0, 0, 99, 96, 1, 0, 0, 0, 99, 97, 1, 
		    0, 0, 0, 99, 98, 1, 0, 0, 0, 100, 121, 1, 0, 0, 0, 101, 102, 10, 11, 
		    0, 0, 102, 103, 7, 0, 0, 0, 103, 120, 3, 16, 8, 12, 104, 105, 10, 
		    10, 0, 0, 105, 106, 7, 1, 0, 0, 106, 120, 3, 16, 8, 11, 107, 108, 
		    10, 9, 0, 0, 108, 109, 7, 2, 0, 0, 109, 120, 3, 16, 8, 10, 110, 111, 
		    10, 8, 0, 0, 111, 112, 7, 3, 0, 0, 112, 120, 3, 16, 8, 9, 113, 114, 
		    10, 7, 0, 0, 114, 115, 5, 19, 0, 0, 115, 120, 3, 16, 8, 8, 116, 117, 
		    10, 6, 0, 0, 117, 118, 5, 20, 0, 0, 118, 120, 3, 16, 8, 7, 119, 101, 
		    1, 0, 0, 0, 119, 104, 1, 0, 0, 0, 119, 107, 1, 0, 0, 0, 119, 110, 
		    1, 0, 0, 0, 119, 113, 1, 0, 0, 0, 119, 116, 1, 0, 0, 0, 120, 123, 
		    1, 0, 0, 0, 121, 119, 1, 0, 0, 0, 121, 122, 1, 0, 0, 0, 122, 17, 1, 
		    0, 0, 0, 123, 121, 1, 0, 0, 0, 124, 125, 7, 4, 0, 0, 125, 19, 1, 0, 
		    0, 0, 126, 127, 7, 5, 0, 0, 127, 21, 1, 0, 0, 0, 11, 25, 35, 41, 52, 
		    54, 59, 69, 83, 99, 119, 121];
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
		        $this->setState(25);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4412407810) !== 0)) {
		        	$this->setState(22);
		        	$this->instruction();
		        	$this->setState(27);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(28);
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
		        $this->setState(35);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::FMT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(30);
		            	$this->printStmt();
		            	break;

		            case self::VAR:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(31);
		            	$this->varDecl();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(32);
		            	$this->assignStmt();
		            	break;

		            case self::IF:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(33);
		            	$this->ifStmt();
		            	break;

		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(34);
		            	$this->block();
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
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(37);
		        $this->match(self::T__0);
		        $this->setState(41);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4412407810) !== 0)) {
		        	$this->setState(38);
		        	$this->instruction();
		        	$this->setState(43);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(44);
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
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_ifStmt);

		    try {
		        $localContext = new Context\IfStatementContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(46);
		        $this->match(self::IF);
		        $this->setState(47);
		        $this->recursiveExpression(0);
		        $this->setState(48);
		        $this->block();
		        $this->setState(54);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(49);
		        	$this->match(self::ELSE);
		        	$this->setState(52);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__0:
		        	    	$this->setState(50);
		        	    	$this->block();
		        	    	break;

		        	    case self::IF:
		        	    	$this->setState(51);
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
		public function printStmt(): Context\PrintStmtContext
		{
		    $localContext = new Context\PrintStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(56);
		        $this->match(self::FMT);
		        $this->setState(57);
		        $this->match(self::T__2);
		        $this->setState(59);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 32212255112) !== 0)) {
		        	$this->setState(58);
		        	$this->expressionList();
		        }
		        $this->setState(61);
		        $this->match(self::T__3);
		        $this->setState(62);
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

		    $this->enterRule($localContext, 10, self::RULE_varDecl);

		    try {
		        $localContext = new Context\VarDeclarationContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(64);
		        $this->match(self::VAR);
		        $this->setState(65);
		        $this->match(self::ID);
		        $this->setState(66);
		        $this->type();
		        $this->setState(69);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__4) {
		        	$this->setState(67);
		        	$this->match(self::T__4);
		        	$this->setState(68);
		        	$this->recursiveExpression(0);
		        }
		        $this->setState(71);
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
		public function assignStmt(): Context\AssignStmtContext
		{
		    $localContext = new Context\AssignStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_assignStmt);

		    try {
		        $localContext = new Context\AssignmentContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(73);
		        $this->match(self::ID);
		        $this->setState(74);
		        $this->match(self::T__4);
		        $this->setState(75);
		        $this->recursiveExpression(0);
		        $this->setState(76);
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
		public function expressionList(): Context\ExpressionListContext
		{
		    $localContext = new Context\ExpressionListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_expressionList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(78);
		        $this->recursiveExpression(0);
		        $this->setState(83);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__5) {
		        	$this->setState(79);
		        	$this->match(self::T__5);
		        	$this->setState(80);
		        	$this->recursiveExpression(0);
		        	$this->setState(85);
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
			$startState = 16;
			$this->enterRecursionRule($localContext, 16, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(99);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__6:
				    	$localContext = new Context\NotExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(87);
				    	$this->match(self::T__6);
				    	$this->setState(88);
				    	$this->recursiveExpression(13);
				    	break;

				    case self::T__7:
				    	$localContext = new Context\UnaryMinusExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(89);
				    	$this->match(self::T__7);
				    	$this->setState(90);
				    	$this->recursiveExpression(12);
				    	break;

				    case self::T__2:
				    	$localContext = new Context\ParenExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(91);
				    	$this->match(self::T__2);
				    	$this->setState(92);
				    	$this->recursiveExpression(0);
				    	$this->setState(93);
				    	$this->match(self::T__3);
				    	break;

				    case self::ID:
				    	$localContext = new Context\IdExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(95);
				    	$this->match(self::ID);
				    	break;

				    case self::INT:
				    	$localContext = new Context\IntExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(96);
				    	$this->match(self::INT);
				    	break;

				    case self::STRING:
				    	$localContext = new Context\StrExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(97);
				    	$this->match(self::STRING);
				    	break;

				    case self::BOOL:
				    	$localContext = new Context\BoolExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(98);
				    	$this->match(self::BOOL);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(121);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(119);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(101);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(102);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3584) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(103);
							    $this->recursiveExpression(12);
							break;

							case 2:
							    $localContext = new Context\AddSubExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(104);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(105);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__7 || $_la === self::T__11)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(106);
							    $this->recursiveExpression(11);
							break;

							case 3:
							    $localContext = new Context\RelExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(107);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(108);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 122880) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(109);
							    $this->recursiveExpression(10);
							break;

							case 4:
							    $localContext = new Context\EqExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(110);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(111);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__16 || $_la === self::T__17)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(112);
							    $this->recursiveExpression(9);
							break;

							case 5:
							    $localContext = new Context\AndExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(113);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(114);
							    $this->match(self::T__18);
							    $this->setState(115);
							    $this->recursiveExpression(8);
							break;

							case 6:
							    $localContext = new Context\OrExprContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(116);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(117);
							    $this->match(self::T__19);
							    $this->setState(118);
							    $this->recursiveExpression(7);
							break;
						} 
					}

					$this->setState(123);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx);
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

		    $this->enterRule($localContext, 18, self::RULE_type);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(124);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1616904192) !== 0))) {
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
		public function stmtTerminator(): Context\StmtTerminatorContext
		{
		    $localContext = new Context\StmtTerminatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_stmtTerminator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(126);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - -1)) & ~0x3f) === 0 && ((1 << ($_la - -1)) & 274894684161) !== 0))) {
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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 8:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 11);

			    case 1:
			        return $this->precpred($this->ctx, 10);

			    case 2:
			        return $this->precpred($this->ctx, 9);

			    case 3:
			        return $this->precpred($this->ctx, 8);

			    case 4:
			        return $this->precpred($this->ctx, 7);

			    case 5:
			        return $this->precpred($this->ctx, 6);
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

	    public function printStmt(): ?PrintStmtContext
	    {
	    	return $this->getTypedRuleContext(PrintStmtContext::class, 0);
	    }

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function assignStmt(): ?AssignStmtContext
	    {
	    	return $this->getTypedRuleContext(AssignStmtContext::class, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
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
			    return $visitor->visitAssignment($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitType($this);
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
}