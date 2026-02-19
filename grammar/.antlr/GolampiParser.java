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
		RULE_exprStmt = 8, RULE_ifStmt = 9, RULE_forStmt = 10, RULE_forInit = 11, 
		RULE_forPost = 12, RULE_switchStmt = 13, RULE_switchCase = 14, RULE_breakStmt = 15, 
		RULE_continueStmt = 16, RULE_printStmt = 17, RULE_varDecl = 18, RULE_constDecl = 19, 
		RULE_shortVarDecl = 20, RULE_idList = 21, RULE_assignStmt = 22, RULE_stmtTerminator = 23, 
		RULE_expressionList = 24, RULE_expression = 25, RULE_type = 26;
	private static String[] makeRuleNames() {
		return new String[] {
			"file", "instruction", "block", "funcDecl", "paramList", "param", "typeList", 
			"returnStmt", "exprStmt", "ifStmt", "forStmt", "forInit", "forPost", 
			"switchStmt", "switchCase", "breakStmt", "continueStmt", "printStmt", 
			"varDecl", "constDecl", "shortVarDecl", "idList", "assignStmt", "stmtTerminator", 
			"expressionList", "expression", "type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'{'", "'}'", "'('", "')'", "','", "';'", "'='", "':'", "':='", 
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
			setState(57);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
				{
				{
				setState(54);
				instruction();
				}
				}
				setState(59);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(60);
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
			setState(79);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,1,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(62);
				funcDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(63);
				printStmt();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(64);
				varDecl();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(65);
				constDecl();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(66);
				shortVarDecl();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(67);
				assignStmt();
				setState(68);
				stmtTerminator();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(70);
				ifStmt();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(71);
				switchStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(72);
				forStmt();
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(73);
				breakStmt();
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(74);
				continueStmt();
				}
				break;
			case 12:
				enterOuterAlt(_localctx, 12);
				{
				setState(75);
				returnStmt();
				}
				break;
			case 13:
				enterOuterAlt(_localctx, 13);
				{
				setState(76);
				exprStmt();
				}
				break;
			case 14:
				enterOuterAlt(_localctx, 14);
				{
				setState(77);
				block();
				}
				break;
			case 15:
				enterOuterAlt(_localctx, 15);
				{
				setState(78);
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
			setState(81);
			match(T__0);
			setState(85);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
				{
				{
				setState(82);
				instruction();
				}
				}
				setState(87);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(88);
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
			setState(90);
			match(FUNC);
			setState(91);
			match(ID);
			setState(92);
			match(T__2);
			setState(94);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ID) {
				{
				setState(93);
				paramList();
				}
			}

			setState(96);
			match(T__3);
			setState(98);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 6755401454324744L) != 0)) {
				{
				setState(97);
				typeList();
				}
			}

			setState(100);
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
			setState(102);
			param();
			setState(107);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(103);
				match(T__4);
				setState(104);
				param();
				}
				}
				setState(109);
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
			setState(110);
			match(ID);
			setState(111);
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
			setState(125);
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
				setState(113);
				type();
				}
				break;
			case T__2:
				enterOuterAlt(_localctx, 2);
				{
				setState(114);
				match(T__2);
				setState(115);
				type();
				setState(120);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__4) {
					{
					{
					setState(116);
					match(T__4);
					setState(117);
					type();
					}
					}
					setState(122);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(123);
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
			setState(127);
			match(RETURN);
			setState(129);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
				{
				setState(128);
				expressionList();
				}
			}

			setState(131);
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
			setState(133);
			expression(0);
			setState(134);
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
	@SuppressWarnings("CheckReturnValue")
	public static class IfStatementSingleContext extends IfStmtContext {
		public TerminalNode IF() { return getToken(GolampiParser.IF, 0); }
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public List<InstructionContext> instruction() {
			return getRuleContexts(InstructionContext.class);
		}
		public InstructionContext instruction(int i) {
			return getRuleContext(InstructionContext.class,i);
		}
		public TerminalNode ELSE() { return getToken(GolampiParser.ELSE, 0); }
		public IfStatementSingleContext(IfStmtContext ctx) { copyFrom(ctx); }
	}

	public final IfStmtContext ifStmt() throws RecognitionException {
		IfStmtContext _localctx = new IfStmtContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_ifStmt);
		try {
			setState(153);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,12,_ctx) ) {
			case 1:
				_localctx = new IfStatementContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(136);
				match(IF);
				setState(137);
				expression(0);
				setState(138);
				block();
				setState(144);
				_errHandler.sync(this);
				switch ( getInterpreter().adaptivePredict(_input,10,_ctx) ) {
				case 1:
					{
					setState(139);
					match(ELSE);
					setState(142);
					_errHandler.sync(this);
					switch (_input.LA(1)) {
					case T__0:
						{
						setState(140);
						block();
						}
						break;
					case IF:
						{
						setState(141);
						ifStmt();
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					}
					break;
				}
				}
				break;
			case 2:
				_localctx = new IfStatementSingleContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(146);
				match(IF);
				setState(147);
				expression(0);
				setState(148);
				instruction();
				setState(151);
				_errHandler.sync(this);
				switch ( getInterpreter().adaptivePredict(_input,11,_ctx) ) {
				case 1:
					{
					setState(149);
					match(ELSE);
					setState(150);
					instruction();
					}
					break;
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
		public ForInitContext forInit() {
			return getRuleContext(ForInitContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public ForPostContext forPost() {
			return getRuleContext(ForPostContext.class,0);
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
			setState(169);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
			case 1:
				_localctx = new ForClassicContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(155);
				match(FOR);
				setState(156);
				forInit();
				setState(157);
				match(T__5);
				setState(158);
				expression(0);
				setState(159);
				match(T__5);
				setState(160);
				forPost();
				setState(161);
				block();
				}
				break;
			case 2:
				_localctx = new ForWhileContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(163);
				match(FOR);
				setState(164);
				expression(0);
				setState(165);
				block();
				}
				break;
			case 3:
				_localctx = new ForInfiniteContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(167);
				match(FOR);
				setState(168);
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
	public static class ForInitContext extends ParserRuleContext {
		public ForInitContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forInit; }
	 
		public ForInitContext() { }
		public void copyFrom(ForInitContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForVarDeclContext extends ForInitContext {
		public TerminalNode VAR() { return getToken(GolampiParser.VAR, 0); }
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public ForVarDeclContext(ForInitContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForEmptyContext extends ForInitContext {
		public ForEmptyContext(ForInitContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForAssignContext extends ForInitContext {
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public ForAssignContext(ForInitContext ctx) { copyFrom(ctx); }
	}

	public final ForInitContext forInit() throws RecognitionException {
		ForInitContext _localctx = new ForInitContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_forInit);
		int _la;
		try {
			setState(180);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case VAR:
				_localctx = new ForVarDeclContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(171);
				match(VAR);
				setState(172);
				match(ID);
				setState(173);
				type();
				setState(176);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__6) {
					{
					setState(174);
					match(T__6);
					setState(175);
					expression(0);
					}
				}

				}
				break;
			case T__2:
			case T__9:
			case T__10:
			case T__12:
			case T__13:
			case T__14:
			case T__26:
			case T__27:
			case T__28:
			case T__29:
			case TYPE_STRING:
			case TYPE_BOOL:
			case BOOL:
			case ID:
			case FLOAT:
			case RUNE:
			case NIL:
			case INT:
			case STRING:
				_localctx = new ForAssignContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(178);
				assignStmt();
				}
				break;
			case T__5:
				_localctx = new ForEmptyContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
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
	public static class ForPostContext extends ParserRuleContext {
		public ForPostContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forPost; }
	 
		public ForPostContext() { }
		public void copyFrom(ForPostContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForPostEmptyContext extends ForPostContext {
		public ForPostEmptyContext(ForPostContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForPostAssignContext extends ForPostContext {
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public ForPostAssignContext(ForPostContext ctx) { copyFrom(ctx); }
	}

	public final ForPostContext forPost() throws RecognitionException {
		ForPostContext _localctx = new ForPostContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_forPost);
		try {
			setState(184);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__2:
			case T__9:
			case T__10:
			case T__12:
			case T__13:
			case T__14:
			case T__26:
			case T__27:
			case T__28:
			case T__29:
			case TYPE_STRING:
			case TYPE_BOOL:
			case BOOL:
			case ID:
			case FLOAT:
			case RUNE:
			case NIL:
			case INT:
			case STRING:
				_localctx = new ForPostAssignContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(182);
				assignStmt();
				}
				break;
			case T__0:
				_localctx = new ForPostEmptyContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
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
		enterRule(_localctx, 26, RULE_switchStmt);
		int _la;
		try {
			_localctx = new SwitchStatementContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(186);
			match(SWITCH);
			setState(187);
			expression(0);
			setState(188);
			match(T__0);
			setState(192);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==CASE || _la==DEFAULT) {
				{
				{
				setState(189);
				switchCase();
				}
				}
				setState(194);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(195);
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
		enterRule(_localctx, 28, RULE_switchCase);
		int _la;
		try {
			setState(214);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case CASE:
				_localctx = new CaseBlockContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(197);
				match(CASE);
				setState(198);
				expressionList();
				setState(199);
				match(T__7);
				setState(203);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
					{
					{
					setState(200);
					instruction();
					}
					}
					setState(205);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				}
				break;
			case DEFAULT:
				_localctx = new DefaultBlockContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(206);
				match(DEFAULT);
				setState(207);
				match(T__7);
				setState(211);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while ((((_la) & ~0x3f) == 0 && ((1L << _la) & -8072697951329129462L) != 0)) {
					{
					{
					setState(208);
					instruction();
					}
					}
					setState(213);
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
		enterRule(_localctx, 30, RULE_breakStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(216);
			match(BREAK);
			setState(217);
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
		enterRule(_localctx, 32, RULE_continueStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(219);
			match(CONTINUE);
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
		enterRule(_localctx, 34, RULE_printStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(222);
			match(FMT);
			setState(223);
			match(T__2);
			setState(225);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
				{
				setState(224);
				expressionList();
				}
			}

			setState(227);
			match(T__3);
			setState(228);
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
		enterRule(_localctx, 36, RULE_varDecl);
		int _la;
		try {
			_localctx = new VarDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(230);
			match(VAR);
			setState(231);
			match(ID);
			setState(232);
			type();
			setState(235);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__6) {
				{
				setState(233);
				match(T__6);
				setState(234);
				expression(0);
				}
			}

			setState(237);
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
		enterRule(_localctx, 38, RULE_constDecl);
		try {
			_localctx = new ConstDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(239);
			match(CONST);
			setState(240);
			match(ID);
			setState(241);
			type();
			setState(242);
			match(T__6);
			setState(243);
			expression(0);
			setState(244);
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
		enterRule(_localctx, 40, RULE_shortVarDecl);
		try {
			_localctx = new ShortVarDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(246);
			idList();
			setState(247);
			match(T__8);
			setState(248);
			expressionList();
			setState(249);
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
		enterRule(_localctx, 42, RULE_idList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(251);
			match(ID);
			setState(256);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(252);
				match(T__4);
				setState(253);
				match(ID);
				}
				}
				setState(258);
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
		enterRule(_localctx, 44, RULE_assignStmt);
		int _la;
		try {
			setState(275);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,24,_ctx) ) {
			case 1:
				_localctx = new PtrAssignmentContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(259);
				match(T__9);
				setState(260);
				match(ID);
				setState(261);
				match(T__6);
				setState(262);
				expression(0);
				}
				break;
			case 2:
				_localctx = new AssignmentContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(263);
				match(ID);
				setState(264);
				((AssignmentContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 263882790666368L) != 0)) ) {
					((AssignmentContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(265);
				expression(0);
				}
				break;
			case 3:
				_localctx = new ArrayAssignmentContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(266);
				expression(0);
				setState(267);
				match(T__10);
				setState(268);
				expression(0);
				setState(269);
				match(T__11);
				setState(270);
				((ArrayAssignmentContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 263882790666368L) != 0)) ) {
					((ArrayAssignmentContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(271);
				expression(0);
				}
				break;
			case 4:
				_localctx = new IncrementDecrementContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(273);
				match(ID);
				setState(274);
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
		enterRule(_localctx, 46, RULE_stmtTerminator);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(277);
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
		enterRule(_localctx, 48, RULE_expressionList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(279);
			expression(0);
			setState(284);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(280);
				match(T__4);
				setState(281);
				expression(0);
				}
				}
				setState(286);
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
		int _startState = 50;
		enterRecursionRule(_localctx, 50, RULE_expression, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(320);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,28,_ctx) ) {
			case 1:
				{
				_localctx = new NotExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(288);
				match(T__12);
				setState(289);
				expression(21);
				}
				break;
			case 2:
				{
				_localctx = new UnaryMinusExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(290);
				match(T__13);
				setState(291);
				expression(20);
				}
				break;
			case 3:
				{
				_localctx = new AddressOfExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(292);
				match(T__14);
				setState(293);
				match(ID);
				}
				break;
			case 4:
				{
				_localctx = new DerefExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(294);
				match(T__9);
				setState(295);
				expression(18);
				}
				break;
			case 5:
				{
				_localctx = new ArrayLiteralContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(296);
				type();
				setState(297);
				match(T__0);
				setState(299);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
					{
					setState(298);
					expressionList();
					}
				}

				setState(301);
				match(T__1);
				}
				break;
			case 6:
				{
				_localctx = new CallExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(303);
				match(ID);
				setState(304);
				match(T__2);
				setState(306);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1150669706806488072L) != 0)) {
					{
					setState(305);
					expressionList();
					}
				}

				setState(308);
				match(T__3);
				}
				break;
			case 7:
				{
				_localctx = new ParenExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(309);
				match(T__2);
				setState(310);
				expression(0);
				setState(311);
				match(T__3);
				}
				break;
			case 8:
				{
				_localctx = new IdExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(313);
				match(ID);
				}
				break;
			case 9:
				{
				_localctx = new FloatExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(314);
				match(FLOAT);
				}
				break;
			case 10:
				{
				_localctx = new RuneExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(315);
				match(RUNE);
				}
				break;
			case 11:
				{
				_localctx = new NilExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(316);
				match(NIL);
				}
				break;
			case 12:
				{
				_localctx = new IntExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(317);
				match(INT);
				}
				break;
			case 13:
				{
				_localctx = new StrExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(318);
				match(STRING);
				}
				break;
			case 14:
				{
				_localctx = new BoolExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(319);
				match(BOOL);
				}
				break;
			}
			_ctx.stop = _input.LT(-1);
			setState(347);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,30,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(345);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,29,_ctx) ) {
					case 1:
						{
						_localctx = new MulDivExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(322);
						if (!(precpred(_ctx, 17))) throw new FailedPredicateException(this, "precpred(_ctx, 17)");
						setState(323);
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
						setState(324);
						expression(18);
						}
						break;
					case 2:
						{
						_localctx = new AddSubExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(325);
						if (!(precpred(_ctx, 16))) throw new FailedPredicateException(this, "precpred(_ctx, 16)");
						setState(326);
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
						setState(327);
						expression(17);
						}
						break;
					case 3:
						{
						_localctx = new RelExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(328);
						if (!(precpred(_ctx, 15))) throw new FailedPredicateException(this, "precpred(_ctx, 15)");
						setState(329);
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
						setState(330);
						expression(16);
						}
						break;
					case 4:
						{
						_localctx = new EqExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(331);
						if (!(precpred(_ctx, 14))) throw new FailedPredicateException(this, "precpred(_ctx, 14)");
						setState(332);
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
						setState(333);
						expression(15);
						}
						break;
					case 5:
						{
						_localctx = new AndExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(334);
						if (!(precpred(_ctx, 13))) throw new FailedPredicateException(this, "precpred(_ctx, 13)");
						setState(335);
						match(T__24);
						setState(336);
						expression(14);
						}
						break;
					case 6:
						{
						_localctx = new OrExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(337);
						if (!(precpred(_ctx, 12))) throw new FailedPredicateException(this, "precpred(_ctx, 12)");
						setState(338);
						match(T__25);
						setState(339);
						expression(13);
						}
						break;
					case 7:
						{
						_localctx = new ArrayAccessExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(340);
						if (!(precpred(_ctx, 9))) throw new FailedPredicateException(this, "precpred(_ctx, 9)");
						setState(341);
						match(T__10);
						setState(342);
						expression(0);
						setState(343);
						match(T__11);
						}
						break;
					}
					} 
				}
				setState(349);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,30,_ctx);
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
		enterRule(_localctx, 52, RULE_type);
		try {
			setState(362);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__26:
				enterOuterAlt(_localctx, 1);
				{
				setState(350);
				match(T__26);
				}
				break;
			case T__27:
				enterOuterAlt(_localctx, 2);
				{
				setState(351);
				match(T__27);
				}
				break;
			case T__28:
				enterOuterAlt(_localctx, 3);
				{
				setState(352);
				match(T__28);
				}
				break;
			case TYPE_STRING:
				enterOuterAlt(_localctx, 4);
				{
				setState(353);
				match(TYPE_STRING);
				}
				break;
			case TYPE_BOOL:
				enterOuterAlt(_localctx, 5);
				{
				setState(354);
				match(TYPE_BOOL);
				}
				break;
			case T__29:
				enterOuterAlt(_localctx, 6);
				{
				setState(355);
				match(T__29);
				}
				break;
			case T__9:
				enterOuterAlt(_localctx, 7);
				{
				setState(356);
				match(T__9);
				setState(357);
				type();
				}
				break;
			case T__10:
				enterOuterAlt(_localctx, 8);
				{
				setState(358);
				match(T__10);
				setState(359);
				match(INT);
				setState(360);
				match(T__11);
				setState(361);
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
		case 25:
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
		"\u0004\u0001?\u016d\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0002\u0019\u0007\u0019\u0002\u001a\u0007\u001a\u0001\u0000\u0005\u0000"+
		"8\b\u0000\n\u0000\f\u0000;\t\u0000\u0001\u0000\u0001\u0000\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001P\b\u0001"+
		"\u0001\u0002\u0001\u0002\u0005\u0002T\b\u0002\n\u0002\f\u0002W\t\u0002"+
		"\u0001\u0002\u0001\u0002\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003"+
		"\u0003\u0003_\b\u0003\u0001\u0003\u0001\u0003\u0003\u0003c\b\u0003\u0001"+
		"\u0003\u0001\u0003\u0001\u0004\u0001\u0004\u0001\u0004\u0005\u0004j\b"+
		"\u0004\n\u0004\f\u0004m\t\u0004\u0001\u0005\u0001\u0005\u0001\u0005\u0001"+
		"\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0005\u0006w\b"+
		"\u0006\n\u0006\f\u0006z\t\u0006\u0001\u0006\u0001\u0006\u0003\u0006~\b"+
		"\u0006\u0001\u0007\u0001\u0007\u0003\u0007\u0082\b\u0007\u0001\u0007\u0001"+
		"\u0007\u0001\b\u0001\b\u0001\b\u0001\t\u0001\t\u0001\t\u0001\t\u0001\t"+
		"\u0001\t\u0003\t\u008f\b\t\u0003\t\u0091\b\t\u0001\t\u0001\t\u0001\t\u0001"+
		"\t\u0001\t\u0003\t\u0098\b\t\u0003\t\u009a\b\t\u0001\n\u0001\n\u0001\n"+
		"\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001"+
		"\n\u0001\n\u0001\n\u0003\n\u00aa\b\n\u0001\u000b\u0001\u000b\u0001\u000b"+
		"\u0001\u000b\u0001\u000b\u0003\u000b\u00b1\b\u000b\u0001\u000b\u0001\u000b"+
		"\u0003\u000b\u00b5\b\u000b\u0001\f\u0001\f\u0003\f\u00b9\b\f\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0005\r\u00bf\b\r\n\r\f\r\u00c2\t\r\u0001\r\u0001\r"+
		"\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0005\u000e\u00ca\b\u000e"+
		"\n\u000e\f\u000e\u00cd\t\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0005"+
		"\u000e\u00d2\b\u000e\n\u000e\f\u000e\u00d5\t\u000e\u0003\u000e\u00d7\b"+
		"\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u0010\u0001\u0010\u0001"+
		"\u0010\u0001\u0011\u0001\u0011\u0001\u0011\u0003\u0011\u00e2\b\u0011\u0001"+
		"\u0011\u0001\u0011\u0001\u0011\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0003\u0012\u00ec\b\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001"+
		"\u0013\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0001"+
		"\u0015\u0001\u0015\u0001\u0015\u0005\u0015\u00ff\b\u0015\n\u0015\f\u0015"+
		"\u0102\t\u0015\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016"+
		"\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016"+
		"\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0003\u0016"+
		"\u0114\b\u0016\u0001\u0017\u0001\u0017\u0001\u0018\u0001\u0018\u0001\u0018"+
		"\u0005\u0018\u011b\b\u0018\n\u0018\f\u0018\u011e\t\u0018\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0003\u0019\u012c"+
		"\b\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0003"+
		"\u0019\u0133\b\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0003\u0019\u0141\b\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u0019\u0001\u0019\u0005\u0019\u015a\b\u0019\n\u0019\f\u0019"+
		"\u015d\t\u0019\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a"+
		"\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a"+
		"\u0001\u001a\u0003\u001a\u016b\b\u001a\u0001\u001a\u0000\u00012\u001b"+
		"\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010\u0012\u0014\u0016\u0018\u001a"+
		"\u001c\u001e \"$&(*,.024\u0000\u0007\u0002\u0000\u0007\u0007,/\u0001\u0000"+
		"01\u0002\u0001\u0006\u0006??\u0002\u0000\n\n\u0010\u0011\u0002\u0000\u000e"+
		"\u000e\u0012\u0012\u0001\u0000\u0013\u0016\u0001\u0000\u0017\u0018\u0199"+
		"\u00009\u0001\u0000\u0000\u0000\u0002O\u0001\u0000\u0000\u0000\u0004Q"+
		"\u0001\u0000\u0000\u0000\u0006Z\u0001\u0000\u0000\u0000\bf\u0001\u0000"+
		"\u0000\u0000\nn\u0001\u0000\u0000\u0000\f}\u0001\u0000\u0000\u0000\u000e"+
		"\u007f\u0001\u0000\u0000\u0000\u0010\u0085\u0001\u0000\u0000\u0000\u0012"+
		"\u0099\u0001\u0000\u0000\u0000\u0014\u00a9\u0001\u0000\u0000\u0000\u0016"+
		"\u00b4\u0001\u0000\u0000\u0000\u0018\u00b8\u0001\u0000\u0000\u0000\u001a"+
		"\u00ba\u0001\u0000\u0000\u0000\u001c\u00d6\u0001\u0000\u0000\u0000\u001e"+
		"\u00d8\u0001\u0000\u0000\u0000 \u00db\u0001\u0000\u0000\u0000\"\u00de"+
		"\u0001\u0000\u0000\u0000$\u00e6\u0001\u0000\u0000\u0000&\u00ef\u0001\u0000"+
		"\u0000\u0000(\u00f6\u0001\u0000\u0000\u0000*\u00fb\u0001\u0000\u0000\u0000"+
		",\u0113\u0001\u0000\u0000\u0000.\u0115\u0001\u0000\u0000\u00000\u0117"+
		"\u0001\u0000\u0000\u00002\u0140\u0001\u0000\u0000\u00004\u016a\u0001\u0000"+
		"\u0000\u000068\u0003\u0002\u0001\u000076\u0001\u0000\u0000\u00008;\u0001"+
		"\u0000\u0000\u000097\u0001\u0000\u0000\u00009:\u0001\u0000\u0000\u0000"+
		":<\u0001\u0000\u0000\u0000;9\u0001\u0000\u0000\u0000<=\u0005\u0000\u0000"+
		"\u0001=\u0001\u0001\u0000\u0000\u0000>P\u0003\u0006\u0003\u0000?P\u0003"+
		"\"\u0011\u0000@P\u0003$\u0012\u0000AP\u0003&\u0013\u0000BP\u0003(\u0014"+
		"\u0000CD\u0003,\u0016\u0000DE\u0003.\u0017\u0000EP\u0001\u0000\u0000\u0000"+
		"FP\u0003\u0012\t\u0000GP\u0003\u001a\r\u0000HP\u0003\u0014\n\u0000IP\u0003"+
		"\u001e\u000f\u0000JP\u0003 \u0010\u0000KP\u0003\u000e\u0007\u0000LP\u0003"+
		"\u0010\b\u0000MP\u0003\u0004\u0002\u0000NP\u0005?\u0000\u0000O>\u0001"+
		"\u0000\u0000\u0000O?\u0001\u0000\u0000\u0000O@\u0001\u0000\u0000\u0000"+
		"OA\u0001\u0000\u0000\u0000OB\u0001\u0000\u0000\u0000OC\u0001\u0000\u0000"+
		"\u0000OF\u0001\u0000\u0000\u0000OG\u0001\u0000\u0000\u0000OH\u0001\u0000"+
		"\u0000\u0000OI\u0001\u0000\u0000\u0000OJ\u0001\u0000\u0000\u0000OK\u0001"+
		"\u0000\u0000\u0000OL\u0001\u0000\u0000\u0000OM\u0001\u0000\u0000\u0000"+
		"ON\u0001\u0000\u0000\u0000P\u0003\u0001\u0000\u0000\u0000QU\u0005\u0001"+
		"\u0000\u0000RT\u0003\u0002\u0001\u0000SR\u0001\u0000\u0000\u0000TW\u0001"+
		"\u0000\u0000\u0000US\u0001\u0000\u0000\u0000UV\u0001\u0000\u0000\u0000"+
		"VX\u0001\u0000\u0000\u0000WU\u0001\u0000\u0000\u0000XY\u0005\u0002\u0000"+
		"\u0000Y\u0005\u0001\u0000\u0000\u0000Z[\u0005&\u0000\u0000[\\\u00056\u0000"+
		"\u0000\\^\u0005\u0003\u0000\u0000]_\u0003\b\u0004\u0000^]\u0001\u0000"+
		"\u0000\u0000^_\u0001\u0000\u0000\u0000_`\u0001\u0000\u0000\u0000`b\u0005"+
		"\u0004\u0000\u0000ac\u0003\f\u0006\u0000ba\u0001\u0000\u0000\u0000bc\u0001"+
		"\u0000\u0000\u0000cd\u0001\u0000\u0000\u0000de\u0003\u0004\u0002\u0000"+
		"e\u0007\u0001\u0000\u0000\u0000fk\u0003\n\u0005\u0000gh\u0005\u0005\u0000"+
		"\u0000hj\u0003\n\u0005\u0000ig\u0001\u0000\u0000\u0000jm\u0001\u0000\u0000"+
		"\u0000ki\u0001\u0000\u0000\u0000kl\u0001\u0000\u0000\u0000l\t\u0001\u0000"+
		"\u0000\u0000mk\u0001\u0000\u0000\u0000no\u00056\u0000\u0000op\u00034\u001a"+
		"\u0000p\u000b\u0001\u0000\u0000\u0000q~\u00034\u001a\u0000rs\u0005\u0003"+
		"\u0000\u0000sx\u00034\u001a\u0000tu\u0005\u0005\u0000\u0000uw\u00034\u001a"+
		"\u0000vt\u0001\u0000\u0000\u0000wz\u0001\u0000\u0000\u0000xv\u0001\u0000"+
		"\u0000\u0000xy\u0001\u0000\u0000\u0000y{\u0001\u0000\u0000\u0000zx\u0001"+
		"\u0000\u0000\u0000{|\u0005\u0004\u0000\u0000|~\u0001\u0000\u0000\u0000"+
		"}q\u0001\u0000\u0000\u0000}r\u0001\u0000\u0000\u0000~\r\u0001\u0000\u0000"+
		"\u0000\u007f\u0081\u0005\'\u0000\u0000\u0080\u0082\u00030\u0018\u0000"+
		"\u0081\u0080\u0001\u0000\u0000\u0000\u0081\u0082\u0001\u0000\u0000\u0000"+
		"\u0082\u0083\u0001\u0000\u0000\u0000\u0083\u0084\u0003.\u0017\u0000\u0084"+
		"\u000f\u0001\u0000\u0000\u0000\u0085\u0086\u00032\u0019\u0000\u0086\u0087"+
		"\u0003.\u0017\u0000\u0087\u0011\u0001\u0000\u0000\u0000\u0088\u0089\u0005"+
		"!\u0000\u0000\u0089\u008a\u00032\u0019\u0000\u008a\u0090\u0003\u0004\u0002"+
		"\u0000\u008b\u008e\u0005\"\u0000\u0000\u008c\u008f\u0003\u0004\u0002\u0000"+
		"\u008d\u008f\u0003\u0012\t\u0000\u008e\u008c\u0001\u0000\u0000\u0000\u008e"+
		"\u008d\u0001\u0000\u0000\u0000\u008f\u0091\u0001\u0000\u0000\u0000\u0090"+
		"\u008b\u0001\u0000\u0000\u0000\u0090\u0091\u0001\u0000\u0000\u0000\u0091"+
		"\u009a\u0001\u0000\u0000\u0000\u0092\u0093\u0005!\u0000\u0000\u0093\u0094"+
		"\u00032\u0019\u0000\u0094\u0097\u0003\u0002\u0001\u0000\u0095\u0096\u0005"+
		"\"\u0000\u0000\u0096\u0098\u0003\u0002\u0001\u0000\u0097\u0095\u0001\u0000"+
		"\u0000\u0000\u0097\u0098\u0001\u0000\u0000\u0000\u0098\u009a\u0001\u0000"+
		"\u0000\u0000\u0099\u0088\u0001\u0000\u0000\u0000\u0099\u0092\u0001\u0000"+
		"\u0000\u0000\u009a\u0013\u0001\u0000\u0000\u0000\u009b\u009c\u0005#\u0000"+
		"\u0000\u009c\u009d\u0003\u0016\u000b\u0000\u009d\u009e\u0005\u0006\u0000"+
		"\u0000\u009e\u009f\u00032\u0019\u0000\u009f\u00a0\u0005\u0006\u0000\u0000"+
		"\u00a0\u00a1\u0003\u0018\f\u0000\u00a1\u00a2\u0003\u0004\u0002\u0000\u00a2"+
		"\u00aa\u0001\u0000\u0000\u0000\u00a3\u00a4\u0005#\u0000\u0000\u00a4\u00a5"+
		"\u00032\u0019\u0000\u00a5\u00a6\u0003\u0004\u0002\u0000\u00a6\u00aa\u0001"+
		"\u0000\u0000\u0000\u00a7\u00a8\u0005#\u0000\u0000\u00a8\u00aa\u0003\u0004"+
		"\u0002\u0000\u00a9\u009b\u0001\u0000\u0000\u0000\u00a9\u00a3\u0001\u0000"+
		"\u0000\u0000\u00a9\u00a7\u0001\u0000\u0000\u0000\u00aa\u0015\u0001\u0000"+
		"\u0000\u0000\u00ab\u00ac\u0005\u001f\u0000\u0000\u00ac\u00ad\u00056\u0000"+
		"\u0000\u00ad\u00b0\u00034\u001a\u0000\u00ae\u00af\u0005\u0007\u0000\u0000"+
		"\u00af\u00b1\u00032\u0019\u0000\u00b0\u00ae\u0001\u0000\u0000\u0000\u00b0"+
		"\u00b1\u0001\u0000\u0000\u0000\u00b1\u00b5\u0001\u0000\u0000\u0000\u00b2"+
		"\u00b5\u0003,\u0016\u0000\u00b3\u00b5\u0001\u0000\u0000\u0000\u00b4\u00ab"+
		"\u0001\u0000\u0000\u0000\u00b4\u00b2\u0001\u0000\u0000\u0000\u00b4\u00b3"+
		"\u0001\u0000\u0000\u0000\u00b5\u0017\u0001\u0000\u0000\u0000\u00b6\u00b9"+
		"\u0003,\u0016\u0000\u00b7\u00b9\u0001\u0000\u0000\u0000\u00b8\u00b6\u0001"+
		"\u0000\u0000\u0000\u00b8\u00b7\u0001\u0000\u0000\u0000\u00b9\u0019\u0001"+
		"\u0000\u0000\u0000\u00ba\u00bb\u0005)\u0000\u0000\u00bb\u00bc\u00032\u0019"+
		"\u0000\u00bc\u00c0\u0005\u0001\u0000\u0000\u00bd\u00bf\u0003\u001c\u000e"+
		"\u0000\u00be\u00bd\u0001\u0000\u0000\u0000\u00bf\u00c2\u0001\u0000\u0000"+
		"\u0000\u00c0\u00be\u0001\u0000\u0000\u0000\u00c0\u00c1\u0001\u0000\u0000"+
		"\u0000\u00c1\u00c3\u0001\u0000\u0000\u0000\u00c2\u00c0\u0001\u0000\u0000"+
		"\u0000\u00c3\u00c4\u0005\u0002\u0000\u0000\u00c4\u001b\u0001\u0000\u0000"+
		"\u0000\u00c5\u00c6\u0005*\u0000\u0000\u00c6\u00c7\u00030\u0018\u0000\u00c7"+
		"\u00cb\u0005\b\u0000\u0000\u00c8\u00ca\u0003\u0002\u0001\u0000\u00c9\u00c8"+
		"\u0001\u0000\u0000\u0000\u00ca\u00cd\u0001\u0000\u0000\u0000\u00cb\u00c9"+
		"\u0001\u0000\u0000\u0000\u00cb\u00cc\u0001\u0000\u0000\u0000\u00cc\u00d7"+
		"\u0001\u0000\u0000\u0000\u00cd\u00cb\u0001\u0000\u0000\u0000\u00ce\u00cf"+
		"\u0005+\u0000\u0000\u00cf\u00d3\u0005\b\u0000\u0000\u00d0\u00d2\u0003"+
		"\u0002\u0001\u0000\u00d1\u00d0\u0001\u0000\u0000\u0000\u00d2\u00d5\u0001"+
		"\u0000\u0000\u0000\u00d3\u00d1\u0001\u0000\u0000\u0000\u00d3\u00d4\u0001"+
		"\u0000\u0000\u0000\u00d4\u00d7\u0001\u0000\u0000\u0000\u00d5\u00d3\u0001"+
		"\u0000\u0000\u0000\u00d6\u00c5\u0001\u0000\u0000\u0000\u00d6\u00ce\u0001"+
		"\u0000\u0000\u0000\u00d7\u001d\u0001\u0000\u0000\u0000\u00d8\u00d9\u0005"+
		"$\u0000\u0000\u00d9\u00da\u0003.\u0017\u0000\u00da\u001f\u0001\u0000\u0000"+
		"\u0000\u00db\u00dc\u0005%\u0000\u0000\u00dc\u00dd\u0003.\u0017\u0000\u00dd"+
		"!\u0001\u0000\u0000\u0000\u00de\u00df\u0005 \u0000\u0000\u00df\u00e1\u0005"+
		"\u0003\u0000\u0000\u00e0\u00e2\u00030\u0018\u0000\u00e1\u00e0\u0001\u0000"+
		"\u0000\u0000\u00e1\u00e2\u0001\u0000\u0000\u0000\u00e2\u00e3\u0001\u0000"+
		"\u0000\u0000\u00e3\u00e4\u0005\u0004\u0000\u0000\u00e4\u00e5\u0003.\u0017"+
		"\u0000\u00e5#\u0001\u0000\u0000\u0000\u00e6\u00e7\u0005\u001f\u0000\u0000"+
		"\u00e7\u00e8\u00056\u0000\u0000\u00e8\u00eb\u00034\u001a\u0000\u00e9\u00ea"+
		"\u0005\u0007\u0000\u0000\u00ea\u00ec\u00032\u0019\u0000\u00eb\u00e9\u0001"+
		"\u0000\u0000\u0000\u00eb\u00ec\u0001\u0000\u0000\u0000\u00ec\u00ed\u0001"+
		"\u0000\u0000\u0000\u00ed\u00ee\u0003.\u0017\u0000\u00ee%\u0001\u0000\u0000"+
		"\u0000\u00ef\u00f0\u0005(\u0000\u0000\u00f0\u00f1\u00056\u0000\u0000\u00f1"+
		"\u00f2\u00034\u001a\u0000\u00f2\u00f3\u0005\u0007\u0000\u0000\u00f3\u00f4"+
		"\u00032\u0019\u0000\u00f4\u00f5\u0003.\u0017\u0000\u00f5\'\u0001\u0000"+
		"\u0000\u0000\u00f6\u00f7\u0003*\u0015\u0000\u00f7\u00f8\u0005\t\u0000"+
		"\u0000\u00f8\u00f9\u00030\u0018\u0000\u00f9\u00fa\u0003.\u0017\u0000\u00fa"+
		")\u0001\u0000\u0000\u0000\u00fb\u0100\u00056\u0000\u0000\u00fc\u00fd\u0005"+
		"\u0005\u0000\u0000\u00fd\u00ff\u00056\u0000\u0000\u00fe\u00fc\u0001\u0000"+
		"\u0000\u0000\u00ff\u0102\u0001\u0000\u0000\u0000\u0100\u00fe\u0001\u0000"+
		"\u0000\u0000\u0100\u0101\u0001\u0000\u0000\u0000\u0101+\u0001\u0000\u0000"+
		"\u0000\u0102\u0100\u0001\u0000\u0000\u0000\u0103\u0104\u0005\n\u0000\u0000"+
		"\u0104\u0105\u00056\u0000\u0000\u0105\u0106\u0005\u0007\u0000\u0000\u0106"+
		"\u0114\u00032\u0019\u0000\u0107\u0108\u00056\u0000\u0000\u0108\u0109\u0007"+
		"\u0000\u0000\u0000\u0109\u0114\u00032\u0019\u0000\u010a\u010b\u00032\u0019"+
		"\u0000\u010b\u010c\u0005\u000b\u0000\u0000\u010c\u010d\u00032\u0019\u0000"+
		"\u010d\u010e\u0005\f\u0000\u0000\u010e\u010f\u0007\u0000\u0000\u0000\u010f"+
		"\u0110\u00032\u0019\u0000\u0110\u0114\u0001\u0000\u0000\u0000\u0111\u0112"+
		"\u00056\u0000\u0000\u0112\u0114\u0007\u0001\u0000\u0000\u0113\u0103\u0001"+
		"\u0000\u0000\u0000\u0113\u0107\u0001\u0000\u0000\u0000\u0113\u010a\u0001"+
		"\u0000\u0000\u0000\u0113\u0111\u0001\u0000\u0000\u0000\u0114-\u0001\u0000"+
		"\u0000\u0000\u0115\u0116\u0007\u0002\u0000\u0000\u0116/\u0001\u0000\u0000"+
		"\u0000\u0117\u011c\u00032\u0019\u0000\u0118\u0119\u0005\u0005\u0000\u0000"+
		"\u0119\u011b\u00032\u0019\u0000\u011a\u0118\u0001\u0000\u0000\u0000\u011b"+
		"\u011e\u0001\u0000\u0000\u0000\u011c\u011a\u0001\u0000\u0000\u0000\u011c"+
		"\u011d\u0001\u0000\u0000\u0000\u011d1\u0001\u0000\u0000\u0000\u011e\u011c"+
		"\u0001\u0000\u0000\u0000\u011f\u0120\u0006\u0019\uffff\uffff\u0000\u0120"+
		"\u0121\u0005\r\u0000\u0000\u0121\u0141\u00032\u0019\u0015\u0122\u0123"+
		"\u0005\u000e\u0000\u0000\u0123\u0141\u00032\u0019\u0014\u0124\u0125\u0005"+
		"\u000f\u0000\u0000\u0125\u0141\u00056\u0000\u0000\u0126\u0127\u0005\n"+
		"\u0000\u0000\u0127\u0141\u00032\u0019\u0012\u0128\u0129\u00034\u001a\u0000"+
		"\u0129\u012b\u0005\u0001\u0000\u0000\u012a\u012c\u00030\u0018\u0000\u012b"+
		"\u012a\u0001\u0000\u0000\u0000\u012b\u012c\u0001\u0000\u0000\u0000\u012c"+
		"\u012d\u0001\u0000\u0000\u0000\u012d\u012e\u0005\u0002\u0000\u0000\u012e"+
		"\u0141\u0001\u0000\u0000\u0000\u012f\u0130\u00056\u0000\u0000\u0130\u0132"+
		"\u0005\u0003\u0000\u0000\u0131\u0133\u00030\u0018\u0000\u0132\u0131\u0001"+
		"\u0000\u0000\u0000\u0132\u0133\u0001\u0000\u0000\u0000\u0133\u0134\u0001"+
		"\u0000\u0000\u0000\u0134\u0141\u0005\u0004\u0000\u0000\u0135\u0136\u0005"+
		"\u0003\u0000\u0000\u0136\u0137\u00032\u0019\u0000\u0137\u0138\u0005\u0004"+
		"\u0000\u0000\u0138\u0141\u0001\u0000\u0000\u0000\u0139\u0141\u00056\u0000"+
		"\u0000\u013a\u0141\u00057\u0000\u0000\u013b\u0141\u00058\u0000\u0000\u013c"+
		"\u0141\u00059\u0000\u0000\u013d\u0141\u0005:\u0000\u0000\u013e\u0141\u0005"+
		";\u0000\u0000\u013f\u0141\u00055\u0000\u0000\u0140\u011f\u0001\u0000\u0000"+
		"\u0000\u0140\u0122\u0001\u0000\u0000\u0000\u0140\u0124\u0001\u0000\u0000"+
		"\u0000\u0140\u0126\u0001\u0000\u0000\u0000\u0140\u0128\u0001\u0000\u0000"+
		"\u0000\u0140\u012f\u0001\u0000\u0000\u0000\u0140\u0135\u0001\u0000\u0000"+
		"\u0000\u0140\u0139\u0001\u0000\u0000\u0000\u0140\u013a\u0001\u0000\u0000"+
		"\u0000\u0140\u013b\u0001\u0000\u0000\u0000\u0140\u013c\u0001\u0000\u0000"+
		"\u0000\u0140\u013d\u0001\u0000\u0000\u0000\u0140\u013e\u0001\u0000\u0000"+
		"\u0000\u0140\u013f\u0001\u0000\u0000\u0000\u0141\u015b\u0001\u0000\u0000"+
		"\u0000\u0142\u0143\n\u0011\u0000\u0000\u0143\u0144\u0007\u0003\u0000\u0000"+
		"\u0144\u015a\u00032\u0019\u0012\u0145\u0146\n\u0010\u0000\u0000\u0146"+
		"\u0147\u0007\u0004\u0000\u0000\u0147\u015a\u00032\u0019\u0011\u0148\u0149"+
		"\n\u000f\u0000\u0000\u0149\u014a\u0007\u0005\u0000\u0000\u014a\u015a\u0003"+
		"2\u0019\u0010\u014b\u014c\n\u000e\u0000\u0000\u014c\u014d\u0007\u0006"+
		"\u0000\u0000\u014d\u015a\u00032\u0019\u000f\u014e\u014f\n\r\u0000\u0000"+
		"\u014f\u0150\u0005\u0019\u0000\u0000\u0150\u015a\u00032\u0019\u000e\u0151"+
		"\u0152\n\f\u0000\u0000\u0152\u0153\u0005\u001a\u0000\u0000\u0153\u015a"+
		"\u00032\u0019\r\u0154\u0155\n\t\u0000\u0000\u0155\u0156\u0005\u000b\u0000"+
		"\u0000\u0156\u0157\u00032\u0019\u0000\u0157\u0158\u0005\f\u0000\u0000"+
		"\u0158\u015a\u0001\u0000\u0000\u0000\u0159\u0142\u0001\u0000\u0000\u0000"+
		"\u0159\u0145\u0001\u0000\u0000\u0000\u0159\u0148\u0001\u0000\u0000\u0000"+
		"\u0159\u014b\u0001\u0000\u0000\u0000\u0159\u014e\u0001\u0000\u0000\u0000"+
		"\u0159\u0151\u0001\u0000\u0000\u0000\u0159\u0154\u0001\u0000\u0000\u0000"+
		"\u015a\u015d\u0001\u0000\u0000\u0000\u015b\u0159\u0001\u0000\u0000\u0000"+
		"\u015b\u015c\u0001\u0000\u0000\u0000\u015c3\u0001\u0000\u0000\u0000\u015d"+
		"\u015b\u0001\u0000\u0000\u0000\u015e\u016b\u0005\u001b\u0000\u0000\u015f"+
		"\u016b\u0005\u001c\u0000\u0000\u0160\u016b\u0005\u001d\u0000\u0000\u0161"+
		"\u016b\u00053\u0000\u0000\u0162\u016b\u00054\u0000\u0000\u0163\u016b\u0005"+
		"\u001e\u0000\u0000\u0164\u0165\u0005\n\u0000\u0000\u0165\u016b\u00034"+
		"\u001a\u0000\u0166\u0167\u0005\u000b\u0000\u0000\u0167\u0168\u0005:\u0000"+
		"\u0000\u0168\u0169\u0005\f\u0000\u0000\u0169\u016b\u00034\u001a\u0000"+
		"\u016a\u015e\u0001\u0000\u0000\u0000\u016a\u015f\u0001\u0000\u0000\u0000"+
		"\u016a\u0160\u0001\u0000\u0000\u0000\u016a\u0161\u0001\u0000\u0000\u0000"+
		"\u016a\u0162\u0001\u0000\u0000\u0000\u016a\u0163\u0001\u0000\u0000\u0000"+
		"\u016a\u0164\u0001\u0000\u0000\u0000\u016a\u0166\u0001\u0000\u0000\u0000"+
		"\u016b5\u0001\u0000\u0000\u0000 9OU^bkx}\u0081\u008e\u0090\u0097\u0099"+
		"\u00a9\u00b0\u00b4\u00b8\u00c0\u00cb\u00d3\u00d6\u00e1\u00eb\u0100\u0113"+
		"\u011c\u012b\u0132\u0140\u0159\u015b\u016a";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}