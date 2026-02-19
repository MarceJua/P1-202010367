// Generated from /home/marcelo/Desktop/P1-202010367/grammar/Golampi.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue"})
public class GolampiParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, T__11=12, T__12=13, T__13=14, T__14=15, T__15=16, T__16=17, 
		T__17=18, T__18=19, T__19=20, T__20=21, T__21=22, T__22=23, T__23=24, 
		T__24=25, T__25=26, T__26=27, T__27=28, T__28=29, T__29=30, VAR=31, FMT=32, 
		IF=33, ELSE=34, FOR=35, BREAK=36, CONTINUE=37, FUNC=38, RETURN=39, CONST=40, 
		SWITCH=41, CASE=42, DEFAULT=43, PLUS_ASSIGN=44, MINUS_ASSIGN=45, MUL_ASSIGN=46, 
		DIV_ASSIGN=47, INC=48, DEC=49, TYPE_INT=50, TYPE_STRING=51, TYPE_BOOL=52, 
		BOOL=53, ID=54, FLOAT=55, RUNE=56, NIL=57, INT=58, STRING=59, COMMENT_MULTI=60, 
		COMMENT=61, WS=62, NEWLINE=63;
	public static final int
		RULE_file = 0, RULE_instruction = 1, RULE_block = 2, RULE_funcDecl = 3, 
		RULE_paramList = 4, RULE_param = 5, RULE_typeList = 6, RULE_returnStmt = 7, 
		RULE_exprStmt = 8, RULE_ifStmt = 9, RULE_forStmt = 10, RULE_switchStmt = 11, 
		RULE_switchCase = 12, RULE_breakStmt = 13, RULE_continueStmt = 14, RULE_printStmt = 15, 
		RULE_varDecl = 16, RULE_constDecl = 17, RULE_shortVarDecl = 18, RULE_idList = 19, 
		RULE_assignStmt = 20, RULE_stmtTerminator = 21, RULE_expressionList = 22, 
		RULE_expression = 23, RULE_type = 24;
	private static String[] makeRuleNames() {
		return new String[] {
			"file", "instruction", "block", "funcDecl", "paramList", "param", "typeList", 
			"returnStmt", "exprStmt", "ifStmt", "forStmt", "switchStmt", "switchCase", 
			"breakStmt", "continueStmt", "printStmt", "varDecl", "constDecl", "shortVarDecl", 
			"idList", "assignStmt", "stmtTerminator", "expressionList", "expression", 
			"type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'{'", "'}'", "'('", "')'", "','", "';'", "':'", "'='", "':='", 
			"'*'", "'['", "']'", "'!'", "'-'", "'&'", "'/'", "'%'", "'+'", "'<'", 
			"'<='", "'>'", "'>='", "'=='", "'!='", "'&&'", "'||'", "'int'", "'int32'", 
			"'float32'", "'rune'", "'var'", "'fmt.Println'", "'if'", "'else'", "'for'", 
			"'break'", "'continue'", "'func'", "'return'", "'const'", "'switch'", 
			"'case'", "'default'", "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", 
			null, "'string'", "'bool'", null, null, null, null, "'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, "VAR", "FMT", "IF", "ELSE", 
			"FOR", "BREAK", "CONTINUE", "FUNC", "RETURN", "CONST", "SWITCH", "CASE", 
			"DEFAULT", "PLUS_ASSIGN", "MINUS_ASSIGN", "MUL_ASSIGN", "DIV_ASSIGN", 
			"INC", "DEC", "TYPE_INT", "TYPE_STRING", "TYPE_BOOL", "BOOL", "ID", "FLOAT", 
			"RUNE", "NIL", "INT", "STRING", "COMMENT_MULTI", "COMMENT", "WS", "NEWLINE"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "Golampi.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public GolampiParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FileContext extends ParserRuleContext {
		public TerminalNode EOF() { return getToken(GolampiParser.EOF, 0); }
		public List<InstructionContext> instruction() {
			return getRuleContexts(InstructionContext.class);
		}
		public InstructionContext instruction(int i) {
			return getRuleContext(InstructionContext.class,i);
		}
		public FileContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_file; }
	}

	public final FileContext file() throws RecognitionException {
		FileContext _localctx = new FileContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_file);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(53);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
				{
				{
				setState(50);
				instruction();
				}
				}
				setState(55);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(56);
			match(EOF);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class InstructionContext extends ParserRuleContext {
		public FuncDeclContext funcDecl() {
			return getRuleContext(FuncDeclContext.class,0);
		}
		public PrintStmtContext printStmt() {
			return getRuleContext(PrintStmtContext.class,0);
		}
		public VarDeclContext varDecl() {
			return getRuleContext(VarDeclContext.class,0);
		}
		public ConstDeclContext constDecl() {
			return getRuleContext(ConstDeclContext.class,0);
		}
		public ShortVarDeclContext shortVarDecl() {
			return getRuleContext(ShortVarDeclContext.class,0);
		}
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
		}
		public SwitchStmtContext switchStmt() {
			return getRuleContext(SwitchStmtContext.class,0);
		}
		public ForStmtContext forStmt() {
			return getRuleContext(ForStmtContext.class,0);
		}
		public BreakStmtContext breakStmt() {
			return getRuleContext(BreakStmtContext.class,0);
		}
		public ContinueStmtContext continueStmt() {
			return getRuleContext(ContinueStmtContext.class,0);
		}
		public ReturnStmtContext returnStmt() {
			return getRuleContext(ReturnStmtContext.class,0);
		}
		public ExprStmtContext exprStmt() {
			return getRuleContext(ExprStmtContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public TerminalNode NEWLINE() { return getToken(GolampiParser.NEWLINE, 0); }
		public InstructionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_instruction; }
	}

	public final InstructionContext instruction() throws RecognitionException {
		InstructionContext _localctx = new InstructionContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_instruction);
		try {
			setState(75);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,1,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(58);
				funcDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(59);
				printStmt();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(60);
				varDecl();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(61);
				constDecl();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(62);
				shortVarDecl();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(63);
				assignStmt();
				setState(64);
				stmtTerminator();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(66);
				ifStmt();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(67);
				switchStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(68);
				forStmt();
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(69);
				breakStmt();
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(70);
				continueStmt();
				}
				break;
			case 12:
				enterOuterAlt(_localctx, 12);
				{
				setState(71);
				returnStmt();
				}
				break;
			case 13:
				enterOuterAlt(_localctx, 13);
				{
				setState(72);
				exprStmt();
				}
				break;
			case 14:
				enterOuterAlt(_localctx, 14);
				{
				setState(73);
				block();
				}
				break;
			case 15:
				enterOuterAlt(_localctx, 15);
				{
				setState(74);
				match(NEWLINE);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BlockContext extends ParserRuleContext {
		public List<InstructionContext> instruction() {
			return getRuleContexts(InstructionContext.class);
		}
		public InstructionContext instruction(int i) {
			return getRuleContext(InstructionContext.class,i);
		}
		public BlockContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_block; }
	}

	public final BlockContext block() throws RecognitionException {
		BlockContext _localctx = new BlockContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_block);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(77);
			match(T__0);
			setState(81);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
				{
				{
				setState(78);
				instruction();
				}
				}
				setState(83);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(84);
			match(T__1);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FuncDeclContext extends ParserRuleContext {
		public FuncDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcDecl; }
	 
		public FuncDeclContext() { }
		public void copyFrom(FuncDeclContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FuncDeclarationContext extends FuncDeclContext {
		public TerminalNode FUNC() { return getToken(GolampiParser.FUNC, 0); }
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParamListContext paramList() {
			return getRuleContext(ParamListContext.class,0);
		}
		public TypeListContext typeList() {
			return getRuleContext(TypeListContext.class,0);
		}
		public FuncDeclarationContext(FuncDeclContext ctx) { copyFrom(ctx); }
	}

	public final FuncDeclContext funcDecl() throws RecognitionException {
		FuncDeclContext _localctx = new FuncDeclContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_funcDecl);
		int _la;
		try {
			_localctx = new FuncDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(86);
			match(FUNC);
			setState(87);
			match(ID);
			setState(88);
			match(T__2);
			setState(90);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ID) {
				{
				setState(89);
				paramList();
				}
			}

			setState(92);
			match(T__3);
			setState(94);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 6755401454324744L) != 0)) {
				{
				setState(93);
				typeList();
				}
			}

			setState(96);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamListContext extends ParserRuleContext {
		public List<ParamContext> param() {
			return getRuleContexts(ParamContext.class);
		}
		public ParamContext param(int i) {
			return getRuleContext(ParamContext.class,i);
		}
		public ParamListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_paramList; }
	}

	public final ParamListContext paramList() throws RecognitionException {
		ParamListContext _localctx = new ParamListContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_paramList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(98);
			param();
			setState(103);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(99);
				match(T__4);
				setState(100);
				param();
				}
				}
				setState(105);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamContext extends ParserRuleContext {
		public ParamContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_param; }
	 
		public ParamContext() { }
		public void copyFrom(ParamContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ParamDefContext extends ParamContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ParamDefContext(ParamContext ctx) { copyFrom(ctx); }
	}

	public final ParamContext param() throws RecognitionException {
		ParamContext _localctx = new ParamContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_param);
		try {
			_localctx = new ParamDefContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(106);
			match(ID);
			setState(107);
			type();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TypeListContext extends ParserRuleContext {
		public List<TypeContext> type() {
			return getRuleContexts(TypeContext.class);
		}
		public TypeContext type(int i) {
			return getRuleContext(TypeContext.class,i);
		}
		public TypeListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_typeList; }
	}

	public final TypeListContext typeList() throws RecognitionException {
		TypeListContext _localctx = new TypeListContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_typeList);
		int _la;
		try {
			setState(121);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__9:
			case T__10:
			case T__26:
			case T__27:
			case T__28:
			case T__29:
			case TYPE_STRING:
			case TYPE_BOOL:
				enterOuterAlt(_localctx, 1);
				{
				setState(109);
				type();
				}
				break;
			case T__2:
				enterOuterAlt(_localctx, 2);
				{
				setState(110);
				match(T__2);
				setState(111);
				type();
				setState(116);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__4) {
					{
					{
					setState(112);
					match(T__4);
					setState(113);
					type();
					}
					}
					setState(118);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(119);
				match(T__3);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnStmtContext extends ParserRuleContext {
		public TerminalNode RETURN() { return getToken(GolampiParser.RETURN, 0); }
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public ExpressionListContext expressionList() {
			return getRuleContext(ExpressionListContext.class,0);
		}
		public ReturnStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnStmt; }
	}

	public final ReturnStmtContext returnStmt() throws RecognitionException {
		ReturnStmtContext _localctx = new ReturnStmtContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_returnStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(123);
			match(RETURN);
			setState(125);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
				{
				setState(124);
				expressionList();
				}
			}

			setState(127);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprStmtContext extends ParserRuleContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public ExprStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_exprStmt; }
	}

	public final ExprStmtContext exprStmt() throws RecognitionException {
		ExprStmtContext _localctx = new ExprStmtContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_exprStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(129);
			expression(0);
			setState(130);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IfStmtContext extends ParserRuleContext {
		public IfStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_ifStmt; }
	 
		public IfStmtContext() { }
		public void copyFrom(IfStmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IfStatementContext extends IfStmtContext {
		public TerminalNode IF() { return getToken(GolampiParser.IF, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public List<BlockContext> block() {
			return getRuleContexts(BlockContext.class);
		}
		public BlockContext block(int i) {
			return getRuleContext(BlockContext.class,i);
		}
		public TerminalNode ELSE() { return getToken(GolampiParser.ELSE, 0); }
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
		}
		public IfStatementContext(IfStmtContext ctx) { copyFrom(ctx); }
	}

	public final IfStmtContext ifStmt() throws RecognitionException {
		IfStmtContext _localctx = new IfStmtContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_ifStmt);
		int _la;
		try {
			_localctx = new IfStatementContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(132);
			match(IF);
			setState(133);
			expression(0);
			setState(134);
			block();
			setState(140);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(135);
				match(ELSE);
				setState(138);
				_errHandler.sync(this);
				switch (_input.LA(1)) {
				case T__0:
					{
					setState(136);
					block();
					}
					break;
				case IF:
					{
					setState(137);
					ifStmt();
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForStmtContext extends ParserRuleContext {
		public ForStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forStmt; }
	 
		public ForStmtContext() { }
		public void copyFrom(ForStmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForWhileContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GolampiParser.FOR, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForWhileContext(ForStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForClassicContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GolampiParser.FOR, 0); }
		public VarDeclContext varDecl() {
			return getRuleContext(VarDeclContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForClassicContext(ForStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForInfiniteContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GolampiParser.FOR, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForInfiniteContext(ForStmtContext ctx) { copyFrom(ctx); }
	}

	public final ForStmtContext forStmt() throws RecognitionException {
		ForStmtContext _localctx = new ForStmtContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_forStmt);
		try {
			setState(155);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,11,_ctx) ) {
			case 1:
				_localctx = new ForClassicContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(142);
				match(FOR);
				setState(143);
				varDecl();
				setState(144);
				expression(0);
				setState(145);
				match(T__5);
				setState(146);
				assignStmt();
				setState(147);
				block();
				}
				break;
			case 2:
				_localctx = new ForWhileContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(149);
				match(FOR);
				setState(150);
				expression(0);
				setState(151);
				block();
				}
				break;
			case 3:
				_localctx = new ForInfiniteContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(153);
				match(FOR);
				setState(154);
				block();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SwitchStmtContext extends ParserRuleContext {
		public SwitchStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchStmt; }
	 
		public SwitchStmtContext() { }
		public void copyFrom(SwitchStmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SwitchStatementContext extends SwitchStmtContext {
		public TerminalNode SWITCH() { return getToken(GolampiParser.SWITCH, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public List<SwitchCaseContext> switchCase() {
			return getRuleContexts(SwitchCaseContext.class);
		}
		public SwitchCaseContext switchCase(int i) {
			return getRuleContext(SwitchCaseContext.class,i);
		}
		public SwitchStatementContext(SwitchStmtContext ctx) { copyFrom(ctx); }
	}

	public final SwitchStmtContext switchStmt() throws RecognitionException {
		SwitchStmtContext _localctx = new SwitchStmtContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_switchStmt);
		int _la;
		try {
			_localctx = new SwitchStatementContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(157);
			match(SWITCH);
			setState(158);
			expression(0);
			setState(159);
			match(T__0);
			setState(163);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==CASE || _la==DEFAULT) {
				{
				{
				setState(160);
				switchCase();
				}
				}
				setState(165);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(166);
			match(T__1);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SwitchCaseContext extends ParserRuleContext {
		public SwitchCaseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchCase; }
	 
		public SwitchCaseContext() { }
		public void copyFrom(SwitchCaseContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DefaultBlockContext extends SwitchCaseContext {
		public TerminalNode DEFAULT() { return getToken(GolampiParser.DEFAULT, 0); }
		public List<InstructionContext> instruction() {
			return getRuleContexts(InstructionContext.class);
		}
		public InstructionContext instruction(int i) {
			return getRuleContext(InstructionContext.class,i);
		}
		public DefaultBlockContext(SwitchCaseContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class CaseBlockContext extends SwitchCaseContext {
		public TerminalNode CASE() { return getToken(GolampiParser.CASE, 0); }
		public ExpressionListContext expressionList() {
			return getRuleContext(ExpressionListContext.class,0);
		}
		public List<InstructionContext> instruction() {
			return getRuleContexts(InstructionContext.class);
		}
		public InstructionContext instruction(int i) {
			return getRuleContext(InstructionContext.class,i);
		}
		public CaseBlockContext(SwitchCaseContext ctx) { copyFrom(ctx); }
	}

	public final SwitchCaseContext switchCase() throws RecognitionException {
		SwitchCaseContext _localctx = new SwitchCaseContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_switchCase);
		int _la;
		try {
			setState(185);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case CASE:
				_localctx = new CaseBlockContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(168);
				match(CASE);
				setState(169);
				expressionList();
				setState(170);
				match(T__6);
				setState(174);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
					{
					{
					setState(171);
					instruction();
					}
					}
					setState(176);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				}
				break;
			case DEFAULT:
				_localctx = new DefaultBlockContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(177);
				match(DEFAULT);
				setState(178);
				match(T__6);
				setState(182);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
					{
					{
					setState(179);
					instruction();
					}
					}
					setState(184);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BreakStmtContext extends ParserRuleContext {
		public TerminalNode BREAK() { return getToken(GolampiParser.BREAK, 0); }
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public BreakStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_breakStmt; }
	}

	public final BreakStmtContext breakStmt() throws RecognitionException {
		BreakStmtContext _localctx = new BreakStmtContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_breakStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(187);
			match(BREAK);
			setState(188);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ContinueStmtContext extends ParserRuleContext {
		public TerminalNode CONTINUE() { return getToken(GolampiParser.CONTINUE, 0); }
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public ContinueStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_continueStmt; }
	}

	public final ContinueStmtContext continueStmt() throws RecognitionException {
		ContinueStmtContext _localctx = new ContinueStmtContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_continueStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(190);
			match(CONTINUE);
			setState(191);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PrintStmtContext extends ParserRuleContext {
		public TerminalNode FMT() { return getToken(GolampiParser.FMT, 0); }
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public ExpressionListContext expressionList() {
			return getRuleContext(ExpressionListContext.class,0);
		}
		public PrintStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_printStmt; }
	}

	public final PrintStmtContext printStmt() throws RecognitionException {
		PrintStmtContext _localctx = new PrintStmtContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_printStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(193);
			match(FMT);
			setState(194);
			match(T__2);
			setState(196);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
				{
				setState(195);
				expressionList();
				}
			}

			setState(198);
			match(T__3);
			setState(199);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class VarDeclContext extends ParserRuleContext {
		public VarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_varDecl; }
	 
		public VarDeclContext() { }
		public void copyFrom(VarDeclContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class VarDeclarationContext extends VarDeclContext {
		public TerminalNode VAR() { return getToken(GolampiParser.VAR, 0); }
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public VarDeclarationContext(VarDeclContext ctx) { copyFrom(ctx); }
	}

	public final VarDeclContext varDecl() throws RecognitionException {
		VarDeclContext _localctx = new VarDeclContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_varDecl);
		int _la;
		try {
			_localctx = new VarDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(201);
			match(VAR);
			setState(202);
			match(ID);
			setState(203);
			type();
			setState(206);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__7) {
				{
				setState(204);
				match(T__7);
				setState(205);
				expression(0);
				}
			}

			setState(208);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ConstDeclContext extends ParserRuleContext {
		public ConstDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_constDecl; }
	 
		public ConstDeclContext() { }
		public void copyFrom(ConstDeclContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ConstDeclarationContext extends ConstDeclContext {
		public TerminalNode CONST() { return getToken(GolampiParser.CONST, 0); }
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public ConstDeclarationContext(ConstDeclContext ctx) { copyFrom(ctx); }
	}

	public final ConstDeclContext constDecl() throws RecognitionException {
		ConstDeclContext _localctx = new ConstDeclContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_constDecl);
		try {
			_localctx = new ConstDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(210);
			match(CONST);
			setState(211);
			match(ID);
			setState(212);
			type();
			setState(213);
			match(T__7);
			setState(214);
			expression(0);
			setState(215);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ShortVarDeclContext extends ParserRuleContext {
		public ShortVarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_shortVarDecl; }
	 
		public ShortVarDeclContext() { }
		public void copyFrom(ShortVarDeclContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ShortVarDeclarationContext extends ShortVarDeclContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public ExpressionListContext expressionList() {
			return getRuleContext(ExpressionListContext.class,0);
		}
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public ShortVarDeclarationContext(ShortVarDeclContext ctx) { copyFrom(ctx); }
	}

	public final ShortVarDeclContext shortVarDecl() throws RecognitionException {
		ShortVarDeclContext _localctx = new ShortVarDeclContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_shortVarDecl);
		try {
			_localctx = new ShortVarDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(217);
			idList();
			setState(218);
			match(T__8);
			setState(219);
			expressionList();
			setState(220);
			stmtTerminator();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IdListContext extends ParserRuleContext {
		public List<TerminalNode> ID() { return getTokens(GolampiParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GolampiParser.ID, i);
		}
		public IdListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_idList; }
	}

	public final IdListContext idList() throws RecognitionException {
		IdListContext _localctx = new IdListContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_idList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(222);
			match(ID);
			setState(227);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(223);
				match(T__4);
				setState(224);
				match(ID);
				}
				}
				setState(229);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AssignStmtContext extends ParserRuleContext {
		public AssignStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_assignStmt; }
	 
		public AssignStmtContext() { }
		public void copyFrom(AssignStmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AssignmentContext extends AssignStmtContext {
		public Token op;
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TerminalNode PLUS_ASSIGN() { return getToken(GolampiParser.PLUS_ASSIGN, 0); }
		public TerminalNode MINUS_ASSIGN() { return getToken(GolampiParser.MINUS_ASSIGN, 0); }
		public TerminalNode MUL_ASSIGN() { return getToken(GolampiParser.MUL_ASSIGN, 0); }
		public TerminalNode DIV_ASSIGN() { return getToken(GolampiParser.DIV_ASSIGN, 0); }
		public AssignmentContext(AssignStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IncrementDecrementContext extends AssignStmtContext {
		public Token op;
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TerminalNode INC() { return getToken(GolampiParser.INC, 0); }
		public TerminalNode DEC() { return getToken(GolampiParser.DEC, 0); }
		public IncrementDecrementContext(AssignStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PtrAssignmentContext extends AssignStmtContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public PtrAssignmentContext(AssignStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayAssignmentContext extends AssignStmtContext {
		public Token op;
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public TerminalNode PLUS_ASSIGN() { return getToken(GolampiParser.PLUS_ASSIGN, 0); }
		public TerminalNode MINUS_ASSIGN() { return getToken(GolampiParser.MINUS_ASSIGN, 0); }
		public TerminalNode MUL_ASSIGN() { return getToken(GolampiParser.MUL_ASSIGN, 0); }
		public TerminalNode DIV_ASSIGN() { return getToken(GolampiParser.DIV_ASSIGN, 0); }
		public ArrayAssignmentContext(AssignStmtContext ctx) { copyFrom(ctx); }
	}

	public final AssignStmtContext assignStmt() throws RecognitionException {
		AssignStmtContext _localctx = new AssignStmtContext(_ctx, getState());
		enterRule(_localctx, 40, RULE_assignStmt);
		int _la;
		try {
			setState(246);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,19,_ctx) ) {
			case 1:
				_localctx = new PtrAssignmentContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(230);
				match(T__9);
				setState(231);
				match(ID);
				setState(232);
				match(T__7);
				setState(233);
				expression(0);
				}
				break;
			case 2:
				_localctx = new AssignmentContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(234);
				match(ID);
				setState(235);
				((AssignmentContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 263882790666496L) != 0)) ) {
					((AssignmentContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(236);
				expression(0);
				}
				break;
			case 3:
				_localctx = new ArrayAssignmentContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(237);
				expression(0);
				setState(238);
				match(T__10);
				setState(239);
				expression(0);
				setState(240);
				match(T__11);
				setState(241);
				((ArrayAssignmentContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 263882790666496L) != 0)) ) {
					((ArrayAssignmentContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(242);
				expression(0);
				}
				break;
			case 4:
				_localctx = new IncrementDecrementContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(244);
				match(ID);
				setState(245);
				((IncrementDecrementContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !(_la==INC || _la==DEC) ) {
					((IncrementDecrementContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class StmtTerminatorContext extends ParserRuleContext {
		public TerminalNode NEWLINE() { return getToken(GolampiParser.NEWLINE, 0); }
		public TerminalNode EOF() { return getToken(GolampiParser.EOF, 0); }
		public StmtTerminatorContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_stmtTerminator; }
	}

	public final StmtTerminatorContext stmtTerminator() throws RecognitionException {
		StmtTerminatorContext _localctx = new StmtTerminatorContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_stmtTerminator);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(248);
			_la = _input.LA(1);
			if ( !(_la==EOF || _la==T__5 || _la==NEWLINE) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExpressionListContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public ExpressionListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expressionList; }
	}

	public final ExpressionListContext expressionList() throws RecognitionException {
		ExpressionListContext _localctx = new ExpressionListContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_expressionList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(250);
			expression(0);
			setState(255);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(251);
				match(T__4);
				setState(252);
				expression(0);
				}
				}
				setState(257);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExpressionContext extends ParserRuleContext {
		public ExpressionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expression; }
	 
		public ExpressionContext() { }
		public void copyFrom(ExpressionContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AndExprContext extends ExpressionContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public AndExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BoolExprContext extends ExpressionContext {
		public TerminalNode BOOL() { return getToken(GolampiParser.BOOL, 0); }
		public BoolExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FloatExprContext extends ExpressionContext {
		public TerminalNode FLOAT() { return getToken(GolampiParser.FLOAT, 0); }
		public FloatExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NilExprContext extends ExpressionContext {
		public TerminalNode NIL() { return getToken(GolampiParser.NIL, 0); }
		public NilExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IdExprContext extends ExpressionContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public IdExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DerefExprContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public DerefExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RelExprContext extends ExpressionContext {
		public Token op;
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public RelExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayAccessExprContext extends ExpressionContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public ArrayAccessExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayLiteralContext extends ExpressionContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExpressionListContext expressionList() {
			return getRuleContext(ExpressionListContext.class,0);
		}
		public ArrayLiteralContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class OrExprContext extends ExpressionContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public OrExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RuneExprContext extends ExpressionContext {
		public TerminalNode RUNE() { return getToken(GolampiParser.RUNE, 0); }
		public RuneExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MulDivExprContext extends ExpressionContext {
		public Token op;
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public MulDivExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AddressOfExprContext extends ExpressionContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public AddressOfExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class EqExprContext extends ExpressionContext {
		public Token op;
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public EqExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StrExprContext extends ExpressionContext {
		public TerminalNode STRING() { return getToken(GolampiParser.STRING, 0); }
		public StrExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class CallExprContext extends ExpressionContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public ExpressionListContext expressionList() {
			return getRuleContext(ExpressionListContext.class,0);
		}
		public CallExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NotExprContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public NotExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IntExprContext extends ExpressionContext {
		public TerminalNode INT() { return getToken(GolampiParser.INT, 0); }
		public IntExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ParenExprContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public ParenExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AddSubExprContext extends ExpressionContext {
		public Token op;
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public AddSubExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class UnaryMinusExprContext extends ExpressionContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public UnaryMinusExprContext(ExpressionContext ctx) { copyFrom(ctx); }
	}

	public final ExpressionContext expression() throws RecognitionException {
		return expression(0);
	}

	private ExpressionContext expression(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ExpressionContext _localctx = new ExpressionContext(_ctx, _parentState);
		ExpressionContext _prevctx = _localctx;
		int _startState = 46;
		enterRecursionRule(_localctx, 46, RULE_expression, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(291);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,23,_ctx) ) {
			case 1:
				{
				_localctx = new NotExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(259);
				match(T__12);
				setState(260);
				expression(21);
				}
				break;
			case 2:
				{
				_localctx = new UnaryMinusExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(261);
				match(T__13);
				setState(262);
				expression(20);
				}
				break;
			case 3:
				{
				_localctx = new AddressOfExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(263);
				match(T__14);
				setState(264);
				match(ID);
				}
				break;
			case 4:
				{
				_localctx = new DerefExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(265);
				match(T__9);
				setState(266);
				expression(18);
				}
				break;
			case 5:
				{
				_localctx = new ArrayLiteralContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(267);
				type();
				setState(268);
				match(T__0);
				setState(270);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
					{
					setState(269);
					expressionList();
					}
				}

				setState(272);
				match(T__1);
				}
				break;
			case 6:
				{
				_localctx = new CallExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(274);
				match(ID);
				setState(275);
				match(T__2);
				setState(277);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
					{
					setState(276);
					expressionList();
					}
				}

				setState(279);
				match(T__3);
				}
				break;
			case 7:
				{
				_localctx = new ParenExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(280);
				match(T__2);
				setState(281);
				expression(0);
				setState(282);
				match(T__3);
				}
				break;
			case 8:
				{
				_localctx = new IdExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(284);
				match(ID);
				}
				break;
			case 9:
				{
				_localctx = new FloatExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(285);
				match(FLOAT);
				}
				break;
			case 10:
				{
				_localctx = new RuneExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(286);
				match(RUNE);
				}
				break;
			case 11:
				{
				_localctx = new NilExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(287);
				match(NIL);
				}
				break;
			case 12:
				{
				_localctx = new IntExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(288);
				match(INT);
				}
				break;
			case 13:
				{
				_localctx = new StrExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(289);
				match(STRING);
				}
				break;
			case 14:
				{
				_localctx = new BoolExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(290);
				match(BOOL);
				}
				break;
			}
			_ctx.stop = _input.LT(-1);
			setState(318);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,25,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(316);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,24,_ctx) ) {
					case 1:
						{
						_localctx = new MulDivExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(293);
						if (!(precpred(_ctx, 17))) throw new FailedPredicateException(this, "precpred(_ctx, 17)");
						setState(294);
						((MulDivExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 197632L) != 0)) ) {
							((MulDivExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(295);
						expression(18);
						}
						break;
					case 2:
						{
						_localctx = new AddSubExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(296);
						if (!(precpred(_ctx, 16))) throw new FailedPredicateException(this, "precpred(_ctx, 16)");
						setState(297);
						((AddSubExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__13 || _la==T__17) ) {
							((AddSubExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(298);
						expression(17);
						}
						break;
					case 3:
						{
						_localctx = new RelExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(299);
						if (!(precpred(_ctx, 15))) throw new FailedPredicateException(this, "precpred(_ctx, 15)");
						setState(300);
						((RelExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 7864320L) != 0)) ) {
							((RelExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(301);
						expression(16);
						}
						break;
					case 4:
						{
						_localctx = new EqExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(302);
						if (!(precpred(_ctx, 14))) throw new FailedPredicateException(this, "precpred(_ctx, 14)");
						setState(303);
						((EqExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__22 || _la==T__23) ) {
							((EqExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(304);
						expression(15);
						}
						break;
					case 5:
						{
						_localctx = new AndExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(305);
						if (!(precpred(_ctx, 13))) throw new FailedPredicateException(this, "precpred(_ctx, 13)");
						setState(306);
						match(T__24);
						setState(307);
						expression(14);
						}
						break;
					case 6:
						{
						_localctx = new OrExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(308);
						if (!(precpred(_ctx, 12))) throw new FailedPredicateException(this, "precpred(_ctx, 12)");
						setState(309);
						match(T__25);
						setState(310);
						expression(13);
						}
						break;
					case 7:
						{
						_localctx = new ArrayAccessExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(311);
						if (!(precpred(_ctx, 9))) throw new FailedPredicateException(this, "precpred(_ctx, 9)");
						setState(312);
						match(T__10);
						setState(313);
						expression(0);
						setState(314);
						match(T__11);
						}
						break;
					}
					} 
				}
				setState(320);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,25,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TypeContext extends ParserRuleContext {
		public TerminalNode TYPE_STRING() { return getToken(GolampiParser.TYPE_STRING, 0); }
		public TerminalNode TYPE_BOOL() { return getToken(GolampiParser.TYPE_BOOL, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public TerminalNode INT() { return getToken(GolampiParser.INT, 0); }
		public TypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_type; }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 48, RULE_type);
		try {
			setState(333);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__26:
				enterOuterAlt(_localctx, 1);
				{
				setState(321);
				match(T__26);
				}
				break;
			case T__27:
				enterOuterAlt(_localctx, 2);
				{
				setState(322);
				match(T__27);
				}
				break;
			case T__28:
				enterOuterAlt(_localctx, 3);
				{
				setState(323);
				match(T__28);
				}
				break;
			case TYPE_STRING:
				enterOuterAlt(_localctx, 4);
				{
				setState(324);
				match(TYPE_STRING);
				}
				break;
			case TYPE_BOOL:
				enterOuterAlt(_localctx, 5);
				{
				setState(325);
				match(TYPE_BOOL);
				}
				break;
			case T__29:
				enterOuterAlt(_localctx, 6);
				{
				setState(326);
				match(T__29);
				}
				break;
			case T__9:
				enterOuterAlt(_localctx, 7);
				{
				setState(327);
				match(T__9);
				setState(328);
				type();
				}
				break;
			case T__10:
				enterOuterAlt(_localctx, 8);
				{
				setState(329);
				match(T__10);
				setState(330);
				match(INT);
				setState(331);
				match(T__11);
				setState(332);
				type();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public boolean sempred(RuleContext _localctx, int ruleIndex, int predIndex) {
		switch (ruleIndex) {
		case 23:
			return expression_sempred((ExpressionContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean expression_sempred(ExpressionContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 17);
		case 1:
			return precpred(_ctx, 16);
		case 2:
			return precpred(_ctx, 15);
		case 3:
			return precpred(_ctx, 14);
		case 4:
			return precpred(_ctx, 13);
		case 5:
			return precpred(_ctx, 12);
		case 6:
			return precpred(_ctx, 9);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u0001?\u0150\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0001\u0000\u0005\u00004\b\u0000\n\u0000\f\u00007\t\u0000\u0001\u0000"+
		"\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0003\u0001L\b\u0001\u0001\u0002\u0001\u0002\u0005\u0002P\b\u0002\n\u0002"+
		"\f\u0002S\t\u0002\u0001\u0002\u0001\u0002\u0001\u0003\u0001\u0003\u0001"+
		"\u0003\u0001\u0003\u0003\u0003[\b\u0003\u0001\u0003\u0001\u0003\u0003"+
		"\u0003_\b\u0003\u0001\u0003\u0001\u0003\u0001\u0004\u0001\u0004\u0001"+
		"\u0004\u0005\u0004f\b\u0004\n\u0004\f\u0004i\t\u0004\u0001\u0005\u0001"+
		"\u0005\u0001\u0005\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001"+
		"\u0006\u0005\u0006s\b\u0006\n\u0006\f\u0006v\t\u0006\u0001\u0006\u0001"+
		"\u0006\u0003\u0006z\b\u0006\u0001\u0007\u0001\u0007\u0003\u0007~\b\u0007"+
		"\u0001\u0007\u0001\u0007\u0001\b\u0001\b\u0001\b\u0001\t\u0001\t\u0001"+
		"\t\u0001\t\u0001\t\u0001\t\u0003\t\u008b\b\t\u0003\t\u008d\b\t\u0001\n"+
		"\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001"+
		"\n\u0001\n\u0001\n\u0001\n\u0003\n\u009c\b\n\u0001\u000b\u0001\u000b\u0001"+
		"\u000b\u0001\u000b\u0005\u000b\u00a2\b\u000b\n\u000b\f\u000b\u00a5\t\u000b"+
		"\u0001\u000b\u0001\u000b\u0001\f\u0001\f\u0001\f\u0001\f\u0005\f\u00ad"+
		"\b\f\n\f\f\f\u00b0\t\f\u0001\f\u0001\f\u0001\f\u0005\f\u00b5\b\f\n\f\f"+
		"\f\u00b8\t\f\u0003\f\u00ba\b\f\u0001\r\u0001\r\u0001\r\u0001\u000e\u0001"+
		"\u000e\u0001\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0003\u000f\u00c5"+
		"\b\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u0010\u0001\u0010\u0001"+
		"\u0010\u0001\u0010\u0001\u0010\u0003\u0010\u00cf\b\u0010\u0001\u0010\u0001"+
		"\u0010\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001"+
		"\u0011\u0001\u0011\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0013\u0001\u0013\u0001\u0013\u0005\u0013\u00e2\b\u0013\n"+
		"\u0013\f\u0013\u00e5\t\u0013\u0001\u0014\u0001\u0014\u0001\u0014\u0001"+
		"\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001"+
		"\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001"+
		"\u0014\u0003\u0014\u00f7\b\u0014\u0001\u0015\u0001\u0015\u0001\u0016\u0001"+
		"\u0016\u0001\u0016\u0005\u0016\u00fe\b\u0016\n\u0016\f\u0016\u0101\t\u0016"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0003\u0017\u010f\b\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0003\u0017\u0116\b\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0003\u0017\u0124\b\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0005\u0017\u013d\b\u0017"+
		"\n\u0017\f\u0017\u0140\t\u0017\u0001\u0018\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0001\u0018\u0003\u0018\u014e\b\u0018\u0001\u0018\u0000"+
		"\u0001.\u0019\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010\u0012\u0014\u0016"+
		"\u0018\u001a\u001c\u001e \"$&(*,.0\u0000\u0007\u0002\u0000\b\b,/\u0001"+
		"\u000001\u0002\u0001\u0006\u0006??\u0002\u0000\n\n\u0010\u0011\u0002\u0000"+
		"\u000e\u000e\u0012\u0012\u0001\u0000\u0013\u0016\u0001\u0000\u0017\u0018"+
		"\u0178\u00005\u0001\u0000\u0000\u0000\u0002K\u0001\u0000\u0000\u0000\u0004"+
		"M\u0001\u0000\u0000\u0000\u0006V\u0001\u0000\u0000\u0000\bb\u0001\u0000"+
		"\u0000\u0000\nj\u0001\u0000\u0000\u0000\fy\u0001\u0000\u0000\u0000\u000e"+
		"{\u0001\u0000\u0000\u0000\u0010\u0081\u0001\u0000\u0000\u0000\u0012\u0084"+
		"\u0001\u0000\u0000\u0000\u0014\u009b\u0001\u0000\u0000\u0000\u0016\u009d"+
		"\u0001\u0000\u0000\u0000\u0018\u00b9\u0001\u0000\u0000\u0000\u001a\u00bb"+
		"\u0001\u0000\u0000\u0000\u001c\u00be\u0001\u0000\u0000\u0000\u001e\u00c1"+
		"\u0001\u0000\u0000\u0000 \u00c9\u0001\u0000\u0000\u0000\"\u00d2\u0001"+
		"\u0000\u0000\u0000$\u00d9\u0001\u0000\u0000\u0000&\u00de\u0001\u0000\u0000"+
		"\u0000(\u00f6\u0001\u0000\u0000\u0000*\u00f8\u0001\u0000\u0000\u0000,"+
		"\u00fa\u0001\u0000\u0000\u0000.\u0123\u0001\u0000\u0000\u00000\u014d\u0001"+
		"\u0000\u0000\u000024\u0003\u0002\u0001\u000032\u0001\u0000\u0000\u0000"+
		"47\u0001\u0000\u0000\u000053\u0001\u0000\u0000\u000056\u0001\u0000\u0000"+
		"\u000068\u0001\u0000\u0000\u000075\u0001\u0000\u0000\u000089\u0005\u0000"+
		"\u0000\u00019\u0001\u0001\u0000\u0000\u0000:L\u0003\u0006\u0003\u0000"+
		";L\u0003\u001e\u000f\u0000<L\u0003 \u0010\u0000=L\u0003\"\u0011\u0000"+
		">L\u0003$\u0012\u0000?@\u0003(\u0014\u0000@A\u0003*\u0015\u0000AL\u0001"+
		"\u0000\u0000\u0000BL\u0003\u0012\t\u0000CL\u0003\u0016\u000b\u0000DL\u0003"+
		"\u0014\n\u0000EL\u0003\u001a\r\u0000FL\u0003\u001c\u000e\u0000GL\u0003"+
		"\u000e\u0007\u0000HL\u0003\u0010\b\u0000IL\u0003\u0004\u0002\u0000JL\u0005"+
		"?\u0000\u0000K:\u0001\u0000\u0000\u0000K;\u0001\u0000\u0000\u0000K<\u0001"+
		"\u0000\u0000\u0000K=\u0001\u0000\u0000\u0000K>\u0001\u0000\u0000\u0000"+
		"K?\u0001\u0000\u0000\u0000KB\u0001\u0000\u0000\u0000KC\u0001\u0000\u0000"+
		"\u0000KD\u0001\u0000\u0000\u0000KE\u0001\u0000\u0000\u0000KF\u0001\u0000"+
		"\u0000\u0000KG\u0001\u0000\u0000\u0000KH\u0001\u0000\u0000\u0000KI\u0001"+
		"\u0000\u0000\u0000KJ\u0001\u0000\u0000\u0000L\u0003\u0001\u0000\u0000"+
		"\u0000MQ\u0005\u0001\u0000\u0000NP\u0003\u0002\u0001\u0000ON\u0001\u0000"+
		"\u0000\u0000PS\u0001\u0000\u0000\u0000QO\u0001\u0000\u0000\u0000QR\u0001"+
		"\u0000\u0000\u0000RT\u0001\u0000\u0000\u0000SQ\u0001\u0000\u0000\u0000"+
		"TU\u0005\u0002\u0000\u0000U\u0005\u0001\u0000\u0000\u0000VW\u0005&\u0000"+
		"\u0000WX\u00056\u0000\u0000XZ\u0005\u0003\u0000\u0000Y[\u0003\b\u0004"+
		"\u0000ZY\u0001\u0000\u0000\u0000Z[\u0001\u0000\u0000\u0000[\\\u0001\u0000"+
		"\u0000\u0000\\^\u0005\u0004\u0000\u0000]_\u0003\f\u0006\u0000^]\u0001"+
		"\u0000\u0000\u0000^_\u0001\u0000\u0000\u0000_`\u0001\u0000\u0000\u0000"+
		"`a\u0003\u0004\u0002\u0000a\u0007\u0001\u0000\u0000\u0000bg\u0003\n\u0005"+
		"\u0000cd\u0005\u0005\u0000\u0000df\u0003\n\u0005\u0000ec\u0001\u0000\u0000"+
		"\u0000fi\u0001\u0000\u0000\u0000ge\u0001\u0000\u0000\u0000gh\u0001\u0000"+
		"\u0000\u0000h\t\u0001\u0000\u0000\u0000ig\u0001\u0000\u0000\u0000jk\u0005"+
		"6\u0000\u0000kl\u00030\u0018\u0000l\u000b\u0001\u0000\u0000\u0000mz\u0003"+
		"0\u0018\u0000no\u0005\u0003\u0000\u0000ot\u00030\u0018\u0000pq\u0005\u0005"+
		"\u0000\u0000qs\u00030\u0018\u0000rp\u0001\u0000\u0000\u0000sv\u0001\u0000"+
		"\u0000\u0000tr\u0001\u0000\u0000\u0000tu\u0001\u0000\u0000\u0000uw\u0001"+
		"\u0000\u0000\u0000vt\u0001\u0000\u0000\u0000wx\u0005\u0004\u0000\u0000"+
		"xz\u0001\u0000\u0000\u0000ym\u0001\u0000\u0000\u0000yn\u0001\u0000\u0000"+
		"\u0000z\r\u0001\u0000\u0000\u0000{}\u0005\'\u0000\u0000|~\u0003,\u0016"+
		"\u0000}|\u0001\u0000\u0000\u0000}~\u0001\u0000\u0000\u0000~\u007f\u0001"+
		"\u0000\u0000\u0000\u007f\u0080\u0003*\u0015\u0000\u0080\u000f\u0001\u0000"+
		"\u0000\u0000\u0081\u0082\u0003.\u0017\u0000\u0082\u0083\u0003*\u0015\u0000"+
		"\u0083\u0011\u0001\u0000\u0000\u0000\u0084\u0085\u0005!\u0000\u0000\u0085"+
		"\u0086\u0003.\u0017\u0000\u0086\u008c\u0003\u0004\u0002\u0000\u0087\u008a"+
		"\u0005\"\u0000\u0000\u0088\u008b\u0003\u0004\u0002\u0000\u0089\u008b\u0003"+
		"\u0012\t\u0000\u008a\u0088\u0001\u0000\u0000\u0000\u008a\u0089\u0001\u0000"+
		"\u0000\u0000\u008b\u008d\u0001\u0000\u0000\u0000\u008c\u0087\u0001\u0000"+
		"\u0000\u0000\u008c\u008d\u0001\u0000\u0000\u0000\u008d\u0013\u0001\u0000"+
		"\u0000\u0000\u008e\u008f\u0005#\u0000\u0000\u008f\u0090\u0003 \u0010\u0000"+
		"\u0090\u0091\u0003.\u0017\u0000\u0091\u0092\u0005\u0006\u0000\u0000\u0092"+
		"\u0093\u0003(\u0014\u0000\u0093\u0094\u0003\u0004\u0002\u0000\u0094\u009c"+
		"\u0001\u0000\u0000\u0000\u0095\u0096\u0005#\u0000\u0000\u0096\u0097\u0003"+
		".\u0017\u0000\u0097\u0098\u0003\u0004\u0002\u0000\u0098\u009c\u0001\u0000"+
		"\u0000\u0000\u0099\u009a\u0005#\u0000\u0000\u009a\u009c\u0003\u0004\u0002"+
		"\u0000\u009b\u008e\u0001\u0000\u0000\u0000\u009b\u0095\u0001\u0000\u0000"+
		"\u0000\u009b\u0099\u0001\u0000\u0000\u0000\u009c\u0015\u0001\u0000\u0000"+
		"\u0000\u009d\u009e\u0005)\u0000\u0000\u009e\u009f\u0003.\u0017\u0000\u009f"+
		"\u00a3\u0005\u0001\u0000\u0000\u00a0\u00a2\u0003\u0018\f\u0000\u00a1\u00a0"+
		"\u0001\u0000\u0000\u0000\u00a2\u00a5\u0001\u0000\u0000\u0000\u00a3\u00a1"+
		"\u0001\u0000\u0000\u0000\u00a3\u00a4\u0001\u0000\u0000\u0000\u00a4\u00a6"+
		"\u0001\u0000\u0000\u0000\u00a5\u00a3\u0001\u0000\u0000\u0000\u00a6\u00a7"+
		"\u0005\u0002\u0000\u0000\u00a7\u0017\u0001\u0000\u0000\u0000\u00a8\u00a9"+
		"\u0005*\u0000\u0000\u00a9\u00aa\u0003,\u0016\u0000\u00aa\u00ae\u0005\u0007"+
		"\u0000\u0000\u00ab\u00ad\u0003\u0002\u0001\u0000\u00ac\u00ab\u0001\u0000"+
		"\u0000\u0000\u00ad\u00b0\u0001\u0000\u0000\u0000\u00ae\u00ac\u0001\u0000"+
		"\u0000\u0000\u00ae\u00af\u0001\u0000\u0000\u0000\u00af\u00ba\u0001\u0000"+
		"\u0000\u0000\u00b0\u00ae\u0001\u0000\u0000\u0000\u00b1\u00b2\u0005+\u0000"+
		"\u0000\u00b2\u00b6\u0005\u0007\u0000\u0000\u00b3\u00b5\u0003\u0002\u0001"+
		"\u0000\u00b4\u00b3\u0001\u0000\u0000\u0000\u00b5\u00b8\u0001\u0000\u0000"+
		"\u0000\u00b6\u00b4\u0001\u0000\u0000\u0000\u00b6\u00b7\u0001\u0000\u0000"+
		"\u0000\u00b7\u00ba\u0001\u0000\u0000\u0000\u00b8\u00b6\u0001\u0000\u0000"+
		"\u0000\u00b9\u00a8\u0001\u0000\u0000\u0000\u00b9\u00b1\u0001\u0000\u0000"+
		"\u0000\u00ba\u0019\u0001\u0000\u0000\u0000\u00bb\u00bc\u0005$\u0000\u0000"+
		"\u00bc\u00bd\u0003*\u0015\u0000\u00bd\u001b\u0001\u0000\u0000\u0000\u00be"+
		"\u00bf\u0005%\u0000\u0000\u00bf\u00c0\u0003*\u0015\u0000\u00c0\u001d\u0001"+
		"\u0000\u0000\u0000\u00c1\u00c2\u0005 \u0000\u0000\u00c2\u00c4\u0005\u0003"+
		"\u0000\u0000\u00c3\u00c5\u0003,\u0016\u0000\u00c4\u00c3\u0001\u0000\u0000"+
		"\u0000\u00c4\u00c5\u0001\u0000\u0000\u0000\u00c5\u00c6\u0001\u0000\u0000"+
		"\u0000\u00c6\u00c7\u0005\u0004\u0000\u0000\u00c7\u00c8\u0003*\u0015\u0000"+
		"\u00c8\u001f\u0001\u0000\u0000\u0000\u00c9\u00ca\u0005\u001f\u0000\u0000"+
		"\u00ca\u00cb\u00056\u0000\u0000\u00cb\u00ce\u00030\u0018\u0000\u00cc\u00cd"+
		"\u0005\b\u0000\u0000\u00cd\u00cf\u0003.\u0017\u0000\u00ce\u00cc\u0001"+
		"\u0000\u0000\u0000\u00ce\u00cf\u0001\u0000\u0000\u0000\u00cf\u00d0\u0001"+
		"\u0000\u0000\u0000\u00d0\u00d1\u0003*\u0015\u0000\u00d1!\u0001\u0000\u0000"+
		"\u0000\u00d2\u00d3\u0005(\u0000\u0000\u00d3\u00d4\u00056\u0000\u0000\u00d4"+
		"\u00d5\u00030\u0018\u0000\u00d5\u00d6\u0005\b\u0000\u0000\u00d6\u00d7"+
		"\u0003.\u0017\u0000\u00d7\u00d8\u0003*\u0015\u0000\u00d8#\u0001\u0000"+
		"\u0000\u0000\u00d9\u00da\u0003&\u0013\u0000\u00da\u00db\u0005\t\u0000"+
		"\u0000\u00db\u00dc\u0003,\u0016\u0000\u00dc\u00dd\u0003*\u0015\u0000\u00dd"+
		"%\u0001\u0000\u0000\u0000\u00de\u00e3\u00056\u0000\u0000\u00df\u00e0\u0005"+
		"\u0005\u0000\u0000\u00e0\u00e2\u00056\u0000\u0000\u00e1\u00df\u0001\u0000"+
		"\u0000\u0000\u00e2\u00e5\u0001\u0000\u0000\u0000\u00e3\u00e1\u0001\u0000"+
		"\u0000\u0000\u00e3\u00e4\u0001\u0000\u0000\u0000\u00e4\'\u0001\u0000\u0000"+
		"\u0000\u00e5\u00e3\u0001\u0000\u0000\u0000\u00e6\u00e7\u0005\n\u0000\u0000"+
		"\u00e7\u00e8\u00056\u0000\u0000\u00e8\u00e9\u0005\b\u0000\u0000\u00e9"+
		"\u00f7\u0003.\u0017\u0000\u00ea\u00eb\u00056\u0000\u0000\u00eb\u00ec\u0007"+
		"\u0000\u0000\u0000\u00ec\u00f7\u0003.\u0017\u0000\u00ed\u00ee\u0003.\u0017"+
		"\u0000\u00ee\u00ef\u0005\u000b\u0000\u0000\u00ef\u00f0\u0003.\u0017\u0000"+
		"\u00f0\u00f1\u0005\f\u0000\u0000\u00f1\u00f2\u0007\u0000\u0000\u0000\u00f2"+
		"\u00f3\u0003.\u0017\u0000\u00f3\u00f7\u0001\u0000\u0000\u0000\u00f4\u00f5"+
		"\u00056\u0000\u0000\u00f5\u00f7\u0007\u0001\u0000\u0000\u00f6\u00e6\u0001"+
		"\u0000\u0000\u0000\u00f6\u00ea\u0001\u0000\u0000\u0000\u00f6\u00ed\u0001"+
		"\u0000\u0000\u0000\u00f6\u00f4\u0001\u0000\u0000\u0000\u00f7)\u0001\u0000"+
		"\u0000\u0000\u00f8\u00f9\u0007\u0002\u0000\u0000\u00f9+\u0001\u0000\u0000"+
		"\u0000\u00fa\u00ff\u0003.\u0017\u0000\u00fb\u00fc\u0005\u0005\u0000\u0000"+
		"\u00fc\u00fe\u0003.\u0017\u0000\u00fd\u00fb\u0001\u0000\u0000\u0000\u00fe"+
		"\u0101\u0001\u0000\u0000\u0000\u00ff\u00fd\u0001\u0000\u0000\u0000\u00ff"+
		"\u0100\u0001\u0000\u0000\u0000\u0100-\u0001\u0000\u0000\u0000\u0101\u00ff"+
		"\u0001\u0000\u0000\u0000\u0102\u0103\u0006\u0017\uffff\uffff\u0000\u0103"+
		"\u0104\u0005\r\u0000\u0000\u0104\u0124\u0003.\u0017\u0015\u0105\u0106"+
		"\u0005\u000e\u0000\u0000\u0106\u0124\u0003.\u0017\u0014\u0107\u0108\u0005"+
		"\u000f\u0000\u0000\u0108\u0124\u00056\u0000\u0000\u0109\u010a\u0005\n"+
		"\u0000\u0000\u010a\u0124\u0003.\u0017\u0012\u010b\u010c\u00030\u0018\u0000"+
		"\u010c\u010e\u0005\u0001\u0000\u0000\u010d\u010f\u0003,\u0016\u0000\u010e"+
		"\u010d\u0001\u0000\u0000\u0000\u010e\u010f\u0001\u0000\u0000\u0000\u010f"+
		"\u0110\u0001\u0000\u0000\u0000\u0110\u0111\u0005\u0002\u0000\u0000\u0111"+
		"\u0124\u0001\u0000\u0000\u0000\u0112\u0113\u00056\u0000\u0000\u0113\u0115"+
		"\u0005\u0003\u0000\u0000\u0114\u0116\u0003,\u0016\u0000\u0115\u0114\u0001"+
		"\u0000\u0000\u0000\u0115\u0116\u0001\u0000\u0000\u0000\u0116\u0117\u0001"+
		"\u0000\u0000\u0000\u0117\u0124\u0005\u0004\u0000\u0000\u0118\u0119\u0005"+
		"\u0003\u0000\u0000\u0119\u011a\u0003.\u0017\u0000\u011a\u011b\u0005\u0004"+
		"\u0000\u0000\u011b\u0124\u0001\u0000\u0000\u0000\u011c\u0124\u00056\u0000"+
		"\u0000\u011d\u0124\u00057\u0000\u0000\u011e\u0124\u00058\u0000\u0000\u011f"+
		"\u0124\u00059\u0000\u0000\u0120\u0124\u0005:\u0000\u0000\u0121\u0124\u0005"+
		";\u0000\u0000\u0122\u0124\u00055\u0000\u0000\u0123\u0102\u0001\u0000\u0000"+
		"\u0000\u0123\u0105\u0001\u0000\u0000\u0000\u0123\u0107\u0001\u0000\u0000"+
		"\u0000\u0123\u0109\u0001\u0000\u0000\u0000\u0123\u010b\u0001\u0000\u0000"+
		"\u0000\u0123\u0112\u0001\u0000\u0000\u0000\u0123\u0118\u0001\u0000\u0000"+
		"\u0000\u0123\u011c\u0001\u0000\u0000\u0000\u0123\u011d\u0001\u0000\u0000"+
		"\u0000\u0123\u011e\u0001\u0000\u0000\u0000\u0123\u011f\u0001\u0000\u0000"+
		"\u0000\u0123\u0120\u0001\u0000\u0000\u0000\u0123\u0121\u0001\u0000\u0000"+
		"\u0000\u0123\u0122\u0001\u0000\u0000\u0000\u0124\u013e\u0001\u0000\u0000"+
		"\u0000\u0125\u0126\n\u0011\u0000\u0000\u0126\u0127\u0007\u0003\u0000\u0000"+
		"\u0127\u013d\u0003.\u0017\u0012\u0128\u0129\n\u0010\u0000\u0000\u0129"+
		"\u012a\u0007\u0004\u0000\u0000\u012a\u013d\u0003.\u0017\u0011\u012b\u012c"+
		"\n\u000f\u0000\u0000\u012c\u012d\u0007\u0005\u0000\u0000\u012d\u013d\u0003"+
		".\u0017\u0010\u012e\u012f\n\u000e\u0000\u0000\u012f\u0130\u0007\u0006"+
		"\u0000\u0000\u0130\u013d\u0003.\u0017\u000f\u0131\u0132\n\r\u0000\u0000"+
		"\u0132\u0133\u0005\u0019\u0000\u0000\u0133\u013d\u0003.\u0017\u000e\u0134"+
		"\u0135\n\f\u0000\u0000\u0135\u0136\u0005\u001a\u0000\u0000\u0136\u013d"+
		"\u0003.\u0017\r\u0137\u0138\n\t\u0000\u0000\u0138\u0139\u0005\u000b\u0000"+
		"\u0000\u0139\u013a\u0003.\u0017\u0000\u013a\u013b\u0005\f\u0000\u0000"+
		"\u013b\u013d\u0001\u0000\u0000\u0000\u013c\u0125\u0001\u0000\u0000\u0000"+
		"\u013c\u0128\u0001\u0000\u0000\u0000\u013c\u012b\u0001\u0000\u0000\u0000"+
		"\u013c\u012e\u0001\u0000\u0000\u0000\u013c\u0131\u0001\u0000\u0000\u0000"+
		"\u013c\u0134\u0001\u0000\u0000\u0000\u013c\u0137\u0001\u0000\u0000\u0000"+
		"\u013d\u0140\u0001\u0000\u0000\u0000\u013e\u013c\u0001\u0000\u0000\u0000"+
		"\u013e\u013f\u0001\u0000\u0000\u0000\u013f/\u0001\u0000\u0000\u0000\u0140"+
		"\u013e\u0001\u0000\u0000\u0000\u0141\u014e\u0005\u001b\u0000\u0000\u0142"+
		"\u014e\u0005\u001c\u0000\u0000\u0143\u014e\u0005\u001d\u0000\u0000\u0144"+
		"\u014e\u00053\u0000\u0000\u0145\u014e\u00054\u0000\u0000\u0146\u014e\u0005"+
		"\u001e\u0000\u0000\u0147\u0148\u0005\n\u0000\u0000\u0148\u014e\u00030"+
		"\u0018\u0000\u0149\u014a\u0005\u000b\u0000\u0000\u014a\u014b\u0005:\u0000"+
		"\u0000\u014b\u014c\u0005\f\u0000\u0000\u014c\u014e\u00030\u0018\u0000"+
		"\u014d\u0141\u0001\u0000\u0000\u0000\u014d\u0142\u0001\u0000\u0000\u0000"+
		"\u014d\u0143\u0001\u0000\u0000\u0000\u014d\u0144\u0001\u0000\u0000\u0000"+
		"\u014d\u0145\u0001\u0000\u0000\u0000\u014d\u0146\u0001\u0000\u0000\u0000"+
		"\u014d\u0147\u0001\u0000\u0000\u0000\u014d\u0149\u0001\u0000\u0000\u0000"+
		"\u014e1\u0001\u0000\u0000\u0000\u001b5KQZ^gty}\u008a\u008c\u009b\u00a3"+
		"\u00ae\u00b6\u00b9\u00c4\u00ce\u00e3\u00f6\u00ff\u010e\u0115\u0123\u013c"+
		"\u013e\u014d";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}