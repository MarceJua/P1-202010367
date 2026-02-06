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
		T__24=25, VAR=26, FMT=27, IF=28, ELSE=29, FOR=30, BREAK=31, CONTINUE=32, 
		FUNC=33, RETURN=34, PLUS_ASSIGN=35, MINUS_ASSIGN=36, MUL_ASSIGN=37, DIV_ASSIGN=38, 
		INC=39, DEC=40, TYPE_INT=41, TYPE_STRING=42, TYPE_BOOL=43, BOOL=44, ID=45, 
		INT=46, STRING=47, COMMENT=48, WS=49, NEWLINE=50;
	public static final int
		RULE_file = 0, RULE_instruction = 1, RULE_block = 2, RULE_funcDecl = 3, 
		RULE_paramList = 4, RULE_param = 5, RULE_typeList = 6, RULE_returnStmt = 7, 
		RULE_exprStmt = 8, RULE_ifStmt = 9, RULE_forStmt = 10, RULE_breakStmt = 11, 
		RULE_continueStmt = 12, RULE_printStmt = 13, RULE_varDecl = 14, RULE_assignStmt = 15, 
		RULE_stmtTerminator = 16, RULE_expressionList = 17, RULE_expression = 18, 
		RULE_type = 19;
	private static String[] makeRuleNames() {
		return new String[] {
			"file", "instruction", "block", "funcDecl", "paramList", "param", "typeList", 
			"returnStmt", "exprStmt", "ifStmt", "forStmt", "breakStmt", "continueStmt", 
			"printStmt", "varDecl", "assignStmt", "stmtTerminator", "expressionList", 
			"expression", "type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'{'", "'}'", "'('", "')'", "','", "';'", "'='", "'['", "']'", 
			"'!'", "'-'", "'*'", "'/'", "'%'", "'+'", "'<'", "'<='", "'>'", "'>='", 
			"'=='", "'!='", "'&&'", "'||'", "'int'", "'int32'", "'var'", "'fmt.Println'", 
			"'if'", "'else'", "'for'", "'break'", "'continue'", "'func'", "'return'", 
			"'+='", "'-='", "'*='", "'/='", "'++'", "'--'", null, "'string'", "'bool'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, "VAR", "FMT", "IF", "ELSE", "FOR", "BREAK", "CONTINUE", "FUNC", 
			"RETURN", "PLUS_ASSIGN", "MINUS_ASSIGN", "MUL_ASSIGN", "DIV_ASSIGN", 
			"INC", "DEC", "TYPE_INT", "TYPE_STRING", "TYPE_BOOL", "BOOL", "ID", "INT", 
			"STRING", "COMMENT", "WS", "NEWLINE"
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
			setState(43);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1403010643135754L) != 0)) {
				{
				{
				setState(40);
				instruction();
				}
				}
				setState(45);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(46);
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
		public AssignStmtContext assignStmt() {
			return getRuleContext(AssignStmtContext.class,0);
		}
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
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
			setState(60);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,1,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(48);
				funcDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(49);
				printStmt();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(50);
				varDecl();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(51);
				assignStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(52);
				ifStmt();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(53);
				forStmt();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(54);
				breakStmt();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(55);
				continueStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(56);
				returnStmt();
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(57);
				exprStmt();
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(58);
				block();
				}
				break;
			case 12:
				enterOuterAlt(_localctx, 12);
				{
				setState(59);
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
			setState(62);
			match(T__0);
			setState(66);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1403010643135754L) != 0)) {
				{
				{
				setState(63);
				instruction();
				}
				}
				setState(68);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(69);
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
			setState(71);
			match(FUNC);
			setState(72);
			match(ID);
			setState(73);
			match(T__2);
			setState(75);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ID) {
				{
				setState(74);
				paramList();
				}
			}

			setState(77);
			match(T__3);
			setState(79);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 13194189865224L) != 0)) {
				{
				setState(78);
				typeList();
				}
			}

			setState(81);
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
			setState(83);
			param();
			setState(88);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(84);
				match(T__4);
				setState(85);
				param();
				}
				}
				setState(90);
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
			setState(91);
			match(ID);
			setState(92);
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
			setState(106);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__7:
			case T__23:
			case T__24:
			case TYPE_STRING:
			case TYPE_BOOL:
				enterOuterAlt(_localctx, 1);
				{
				setState(94);
				type();
				}
				break;
			case T__2:
				enterOuterAlt(_localctx, 2);
				{
				setState(95);
				match(T__2);
				setState(96);
				type();
				setState(101);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__4) {
					{
					{
					setState(97);
					match(T__4);
					setState(98);
					type();
					}
					}
					setState(103);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(104);
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
			setState(108);
			match(RETURN);
			setState(110);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 277076980534536L) != 0)) {
				{
				setState(109);
				expressionList();
				}
			}

			setState(112);
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
			setState(114);
			expression(0);
			setState(115);
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
			setState(117);
			match(IF);
			setState(118);
			expression(0);
			setState(119);
			block();
			setState(125);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(120);
				match(ELSE);
				setState(123);
				_errHandler.sync(this);
				switch (_input.LA(1)) {
				case T__0:
					{
					setState(121);
					block();
					}
					break;
				case IF:
					{
					setState(122);
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
			setState(140);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,11,_ctx) ) {
			case 1:
				_localctx = new ForClassicContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(127);
				match(FOR);
				setState(128);
				varDecl();
				setState(129);
				expression(0);
				setState(130);
				match(T__5);
				setState(131);
				assignStmt();
				setState(132);
				block();
				}
				break;
			case 2:
				_localctx = new ForWhileContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(134);
				match(FOR);
				setState(135);
				expression(0);
				setState(136);
				block();
				}
				break;
			case 3:
				_localctx = new ForInfiniteContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(138);
				match(FOR);
				setState(139);
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
		enterRule(_localctx, 22, RULE_breakStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(142);
			match(BREAK);
			setState(143);
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
		enterRule(_localctx, 24, RULE_continueStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(145);
			match(CONTINUE);
			setState(146);
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
		enterRule(_localctx, 26, RULE_printStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(148);
			match(FMT);
			setState(149);
			match(T__2);
			setState(151);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 277076980534536L) != 0)) {
				{
				setState(150);
				expressionList();
				}
			}

			setState(153);
			match(T__3);
			setState(154);
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
		enterRule(_localctx, 28, RULE_varDecl);
		int _la;
		try {
			_localctx = new VarDeclarationContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(156);
			match(VAR);
			setState(157);
			match(ID);
			setState(158);
			type();
			setState(161);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__6) {
				{
				setState(159);
				match(T__6);
				setState(160);
				expression(0);
				}
			}

			setState(163);
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
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
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
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public TerminalNode INC() { return getToken(GolampiParser.INC, 0); }
		public TerminalNode DEC() { return getToken(GolampiParser.DEC, 0); }
		public IncrementDecrementContext(AssignStmtContext ctx) { copyFrom(ctx); }
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
		public StmtTerminatorContext stmtTerminator() {
			return getRuleContext(StmtTerminatorContext.class,0);
		}
		public TerminalNode PLUS_ASSIGN() { return getToken(GolampiParser.PLUS_ASSIGN, 0); }
		public TerminalNode MINUS_ASSIGN() { return getToken(GolampiParser.MINUS_ASSIGN, 0); }
		public TerminalNode MUL_ASSIGN() { return getToken(GolampiParser.MUL_ASSIGN, 0); }
		public TerminalNode DIV_ASSIGN() { return getToken(GolampiParser.DIV_ASSIGN, 0); }
		public ArrayAssignmentContext(AssignStmtContext ctx) { copyFrom(ctx); }
	}

	public final AssignStmtContext assignStmt() throws RecognitionException {
		AssignStmtContext _localctx = new AssignStmtContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_assignStmt);
		int _la;
		try {
			setState(181);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,14,_ctx) ) {
			case 1:
				_localctx = new AssignmentContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(165);
				match(ID);
				setState(166);
				((AssignmentContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 515396075648L) != 0)) ) {
					((AssignmentContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(167);
				expression(0);
				setState(168);
				stmtTerminator();
				}
				break;
			case 2:
				_localctx = new ArrayAssignmentContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(170);
				expression(0);
				setState(171);
				match(T__7);
				setState(172);
				expression(0);
				setState(173);
				match(T__8);
				setState(174);
				((ArrayAssignmentContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 515396075648L) != 0)) ) {
					((ArrayAssignmentContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(175);
				expression(0);
				setState(176);
				stmtTerminator();
				}
				break;
			case 3:
				_localctx = new IncrementDecrementContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(178);
				match(ID);
				setState(179);
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
				setState(180);
				stmtTerminator();
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
		enterRule(_localctx, 32, RULE_stmtTerminator);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(183);
			_la = _input.LA(1);
			if ( !(((((_la - -1)) & ~0x3f) == 0 && ((1L << (_la - -1)) & 2251799813685377L) != 0)) ) {
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
		enterRule(_localctx, 34, RULE_expressionList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(185);
			expression(0);
			setState(190);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__4) {
				{
				{
				setState(186);
				match(T__4);
				setState(187);
				expression(0);
				}
				}
				setState(192);
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
	public static class IdExprContext extends ExpressionContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public IdExprContext(ExpressionContext ctx) { copyFrom(ctx); }
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
		int _startState = 36;
		enterRecursionRule(_localctx, 36, RULE_expression, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(219);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,18,_ctx) ) {
			case 1:
				{
				_localctx = new NotExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(194);
				match(T__9);
				setState(195);
				expression(16);
				}
				break;
			case 2:
				{
				_localctx = new UnaryMinusExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(196);
				match(T__10);
				setState(197);
				expression(15);
				}
				break;
			case 3:
				{
				_localctx = new ArrayLiteralContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(198);
				type();
				setState(199);
				match(T__0);
				setState(201);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 277076980534536L) != 0)) {
					{
					setState(200);
					expressionList();
					}
				}

				setState(203);
				match(T__1);
				}
				break;
			case 4:
				{
				_localctx = new CallExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(205);
				match(ID);
				setState(206);
				match(T__2);
				setState(208);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 277076980534536L) != 0)) {
					{
					setState(207);
					expressionList();
					}
				}

				setState(210);
				match(T__3);
				}
				break;
			case 5:
				{
				_localctx = new ParenExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(211);
				match(T__2);
				setState(212);
				expression(0);
				setState(213);
				match(T__3);
				}
				break;
			case 6:
				{
				_localctx = new IdExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(215);
				match(ID);
				}
				break;
			case 7:
				{
				_localctx = new IntExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(216);
				match(INT);
				}
				break;
			case 8:
				{
				_localctx = new StrExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(217);
				match(STRING);
				}
				break;
			case 9:
				{
				_localctx = new BoolExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(218);
				match(BOOL);
				}
				break;
			}
			_ctx.stop = _input.LT(-1);
			setState(246);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,20,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(244);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,19,_ctx) ) {
					case 1:
						{
						_localctx = new MulDivExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(221);
						if (!(precpred(_ctx, 14))) throw new FailedPredicateException(this, "precpred(_ctx, 14)");
						setState(222);
						((MulDivExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 28672L) != 0)) ) {
							((MulDivExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(223);
						expression(15);
						}
						break;
					case 2:
						{
						_localctx = new AddSubExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(224);
						if (!(precpred(_ctx, 13))) throw new FailedPredicateException(this, "precpred(_ctx, 13)");
						setState(225);
						((AddSubExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__10 || _la==T__14) ) {
							((AddSubExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(226);
						expression(14);
						}
						break;
					case 3:
						{
						_localctx = new RelExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(227);
						if (!(precpred(_ctx, 12))) throw new FailedPredicateException(this, "precpred(_ctx, 12)");
						setState(228);
						((RelExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 983040L) != 0)) ) {
							((RelExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(229);
						expression(13);
						}
						break;
					case 4:
						{
						_localctx = new EqExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(230);
						if (!(precpred(_ctx, 11))) throw new FailedPredicateException(this, "precpred(_ctx, 11)");
						setState(231);
						((EqExprContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__19 || _la==T__20) ) {
							((EqExprContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(232);
						expression(12);
						}
						break;
					case 5:
						{
						_localctx = new AndExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(233);
						if (!(precpred(_ctx, 10))) throw new FailedPredicateException(this, "precpred(_ctx, 10)");
						setState(234);
						match(T__21);
						setState(235);
						expression(11);
						}
						break;
					case 6:
						{
						_localctx = new OrExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(236);
						if (!(precpred(_ctx, 9))) throw new FailedPredicateException(this, "precpred(_ctx, 9)");
						setState(237);
						match(T__22);
						setState(238);
						expression(10);
						}
						break;
					case 7:
						{
						_localctx = new ArrayAccessExprContext(new ExpressionContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expression);
						setState(239);
						if (!(precpred(_ctx, 6))) throw new FailedPredicateException(this, "precpred(_ctx, 6)");
						setState(240);
						match(T__7);
						setState(241);
						expression(0);
						setState(242);
						match(T__8);
						}
						break;
					}
					} 
				}
				setState(248);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,20,_ctx);
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
		public TerminalNode INT() { return getToken(GolampiParser.INT, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public TypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_type; }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_type);
		try {
			setState(257);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__23:
				enterOuterAlt(_localctx, 1);
				{
				setState(249);
				match(T__23);
				}
				break;
			case T__24:
				enterOuterAlt(_localctx, 2);
				{
				setState(250);
				match(T__24);
				}
				break;
			case TYPE_STRING:
				enterOuterAlt(_localctx, 3);
				{
				setState(251);
				match(TYPE_STRING);
				}
				break;
			case TYPE_BOOL:
				enterOuterAlt(_localctx, 4);
				{
				setState(252);
				match(TYPE_BOOL);
				}
				break;
			case T__7:
				enterOuterAlt(_localctx, 5);
				{
				setState(253);
				match(T__7);
				setState(254);
				match(INT);
				setState(255);
				match(T__8);
				setState(256);
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
		case 18:
			return expression_sempred((ExpressionContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean expression_sempred(ExpressionContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 14);
		case 1:
			return precpred(_ctx, 13);
		case 2:
			return precpred(_ctx, 12);
		case 3:
			return precpred(_ctx, 11);
		case 4:
			return precpred(_ctx, 10);
		case 5:
			return precpred(_ctx, 9);
		case 6:
			return precpred(_ctx, 6);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u00012\u0104\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0001\u0000\u0005\u0000*\b\u0000\n\u0000\f\u0000"+
		"-\t\u0000\u0001\u0000\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001=\b\u0001\u0001\u0002"+
		"\u0001\u0002\u0005\u0002A\b\u0002\n\u0002\f\u0002D\t\u0002\u0001\u0002"+
		"\u0001\u0002\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0003\u0003"+
		"L\b\u0003\u0001\u0003\u0001\u0003\u0003\u0003P\b\u0003\u0001\u0003\u0001"+
		"\u0003\u0001\u0004\u0001\u0004\u0001\u0004\u0005\u0004W\b\u0004\n\u0004"+
		"\f\u0004Z\t\u0004\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0006\u0001"+
		"\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0005\u0006d\b\u0006\n\u0006"+
		"\f\u0006g\t\u0006\u0001\u0006\u0001\u0006\u0003\u0006k\b\u0006\u0001\u0007"+
		"\u0001\u0007\u0003\u0007o\b\u0007\u0001\u0007\u0001\u0007\u0001\b\u0001"+
		"\b\u0001\b\u0001\t\u0001\t\u0001\t\u0001\t\u0001\t\u0001\t\u0003\t|\b"+
		"\t\u0003\t~\b\t\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001"+
		"\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0003\n\u008d\b\n\u0001"+
		"\u000b\u0001\u000b\u0001\u000b\u0001\f\u0001\f\u0001\f\u0001\r\u0001\r"+
		"\u0001\r\u0003\r\u0098\b\r\u0001\r\u0001\r\u0001\r\u0001\u000e\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000e\u0003\u000e\u00a2\b\u000e\u0001\u000e"+
		"\u0001\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0003\u000f"+
		"\u00b6\b\u000f\u0001\u0010\u0001\u0010\u0001\u0011\u0001\u0011\u0001\u0011"+
		"\u0005\u0011\u00bd\b\u0011\n\u0011\f\u0011\u00c0\t\u0011\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0003\u0012\u00ca\b\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0003\u0012\u00d1\b\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0003\u0012\u00dc\b\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0005\u0012\u00f5\b\u0012\n\u0012\f\u0012\u00f8\t\u0012"+
		"\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013"+
		"\u0001\u0013\u0001\u0013\u0003\u0013\u0102\b\u0013\u0001\u0013\u0000\u0001"+
		"$\u0014\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010\u0012\u0014\u0016\u0018"+
		"\u001a\u001c\u001e \"$&\u0000\u0007\u0002\u0000\u0007\u0007#&\u0001\u0000"+
		"\'(\u0002\u0001\u0006\u000622\u0001\u0000\f\u000e\u0002\u0000\u000b\u000b"+
		"\u000f\u000f\u0001\u0000\u0010\u0013\u0001\u0000\u0014\u0015\u0120\u0000"+
		"+\u0001\u0000\u0000\u0000\u0002<\u0001\u0000\u0000\u0000\u0004>\u0001"+
		"\u0000\u0000\u0000\u0006G\u0001\u0000\u0000\u0000\bS\u0001\u0000\u0000"+
		"\u0000\n[\u0001\u0000\u0000\u0000\fj\u0001\u0000\u0000\u0000\u000el\u0001"+
		"\u0000\u0000\u0000\u0010r\u0001\u0000\u0000\u0000\u0012u\u0001\u0000\u0000"+
		"\u0000\u0014\u008c\u0001\u0000\u0000\u0000\u0016\u008e\u0001\u0000\u0000"+
		"\u0000\u0018\u0091\u0001\u0000\u0000\u0000\u001a\u0094\u0001\u0000\u0000"+
		"\u0000\u001c\u009c\u0001\u0000\u0000\u0000\u001e\u00b5\u0001\u0000\u0000"+
		"\u0000 \u00b7\u0001\u0000\u0000\u0000\"\u00b9\u0001\u0000\u0000\u0000"+
		"$\u00db\u0001\u0000\u0000\u0000&\u0101\u0001\u0000\u0000\u0000(*\u0003"+
		"\u0002\u0001\u0000)(\u0001\u0000\u0000\u0000*-\u0001\u0000\u0000\u0000"+
		"+)\u0001\u0000\u0000\u0000+,\u0001\u0000\u0000\u0000,.\u0001\u0000\u0000"+
		"\u0000-+\u0001\u0000\u0000\u0000./\u0005\u0000\u0000\u0001/\u0001\u0001"+
		"\u0000\u0000\u00000=\u0003\u0006\u0003\u00001=\u0003\u001a\r\u00002=\u0003"+
		"\u001c\u000e\u00003=\u0003\u001e\u000f\u00004=\u0003\u0012\t\u00005=\u0003"+
		"\u0014\n\u00006=\u0003\u0016\u000b\u00007=\u0003\u0018\f\u00008=\u0003"+
		"\u000e\u0007\u00009=\u0003\u0010\b\u0000:=\u0003\u0004\u0002\u0000;=\u0005"+
		"2\u0000\u0000<0\u0001\u0000\u0000\u0000<1\u0001\u0000\u0000\u0000<2\u0001"+
		"\u0000\u0000\u0000<3\u0001\u0000\u0000\u0000<4\u0001\u0000\u0000\u0000"+
		"<5\u0001\u0000\u0000\u0000<6\u0001\u0000\u0000\u0000<7\u0001\u0000\u0000"+
		"\u0000<8\u0001\u0000\u0000\u0000<9\u0001\u0000\u0000\u0000<:\u0001\u0000"+
		"\u0000\u0000<;\u0001\u0000\u0000\u0000=\u0003\u0001\u0000\u0000\u0000"+
		">B\u0005\u0001\u0000\u0000?A\u0003\u0002\u0001\u0000@?\u0001\u0000\u0000"+
		"\u0000AD\u0001\u0000\u0000\u0000B@\u0001\u0000\u0000\u0000BC\u0001\u0000"+
		"\u0000\u0000CE\u0001\u0000\u0000\u0000DB\u0001\u0000\u0000\u0000EF\u0005"+
		"\u0002\u0000\u0000F\u0005\u0001\u0000\u0000\u0000GH\u0005!\u0000\u0000"+
		"HI\u0005-\u0000\u0000IK\u0005\u0003\u0000\u0000JL\u0003\b\u0004\u0000"+
		"KJ\u0001\u0000\u0000\u0000KL\u0001\u0000\u0000\u0000LM\u0001\u0000\u0000"+
		"\u0000MO\u0005\u0004\u0000\u0000NP\u0003\f\u0006\u0000ON\u0001\u0000\u0000"+
		"\u0000OP\u0001\u0000\u0000\u0000PQ\u0001\u0000\u0000\u0000QR\u0003\u0004"+
		"\u0002\u0000R\u0007\u0001\u0000\u0000\u0000SX\u0003\n\u0005\u0000TU\u0005"+
		"\u0005\u0000\u0000UW\u0003\n\u0005\u0000VT\u0001\u0000\u0000\u0000WZ\u0001"+
		"\u0000\u0000\u0000XV\u0001\u0000\u0000\u0000XY\u0001\u0000\u0000\u0000"+
		"Y\t\u0001\u0000\u0000\u0000ZX\u0001\u0000\u0000\u0000[\\\u0005-\u0000"+
		"\u0000\\]\u0003&\u0013\u0000]\u000b\u0001\u0000\u0000\u0000^k\u0003&\u0013"+
		"\u0000_`\u0005\u0003\u0000\u0000`e\u0003&\u0013\u0000ab\u0005\u0005\u0000"+
		"\u0000bd\u0003&\u0013\u0000ca\u0001\u0000\u0000\u0000dg\u0001\u0000\u0000"+
		"\u0000ec\u0001\u0000\u0000\u0000ef\u0001\u0000\u0000\u0000fh\u0001\u0000"+
		"\u0000\u0000ge\u0001\u0000\u0000\u0000hi\u0005\u0004\u0000\u0000ik\u0001"+
		"\u0000\u0000\u0000j^\u0001\u0000\u0000\u0000j_\u0001\u0000\u0000\u0000"+
		"k\r\u0001\u0000\u0000\u0000ln\u0005\"\u0000\u0000mo\u0003\"\u0011\u0000"+
		"nm\u0001\u0000\u0000\u0000no\u0001\u0000\u0000\u0000op\u0001\u0000\u0000"+
		"\u0000pq\u0003 \u0010\u0000q\u000f\u0001\u0000\u0000\u0000rs\u0003$\u0012"+
		"\u0000st\u0003 \u0010\u0000t\u0011\u0001\u0000\u0000\u0000uv\u0005\u001c"+
		"\u0000\u0000vw\u0003$\u0012\u0000w}\u0003\u0004\u0002\u0000x{\u0005\u001d"+
		"\u0000\u0000y|\u0003\u0004\u0002\u0000z|\u0003\u0012\t\u0000{y\u0001\u0000"+
		"\u0000\u0000{z\u0001\u0000\u0000\u0000|~\u0001\u0000\u0000\u0000}x\u0001"+
		"\u0000\u0000\u0000}~\u0001\u0000\u0000\u0000~\u0013\u0001\u0000\u0000"+
		"\u0000\u007f\u0080\u0005\u001e\u0000\u0000\u0080\u0081\u0003\u001c\u000e"+
		"\u0000\u0081\u0082\u0003$\u0012\u0000\u0082\u0083\u0005\u0006\u0000\u0000"+
		"\u0083\u0084\u0003\u001e\u000f\u0000\u0084\u0085\u0003\u0004\u0002\u0000"+
		"\u0085\u008d\u0001\u0000\u0000\u0000\u0086\u0087\u0005\u001e\u0000\u0000"+
		"\u0087\u0088\u0003$\u0012\u0000\u0088\u0089\u0003\u0004\u0002\u0000\u0089"+
		"\u008d\u0001\u0000\u0000\u0000\u008a\u008b\u0005\u001e\u0000\u0000\u008b"+
		"\u008d\u0003\u0004\u0002\u0000\u008c\u007f\u0001\u0000\u0000\u0000\u008c"+
		"\u0086\u0001\u0000\u0000\u0000\u008c\u008a\u0001\u0000\u0000\u0000\u008d"+
		"\u0015\u0001\u0000\u0000\u0000\u008e\u008f\u0005\u001f\u0000\u0000\u008f"+
		"\u0090\u0003 \u0010\u0000\u0090\u0017\u0001\u0000\u0000\u0000\u0091\u0092"+
		"\u0005 \u0000\u0000\u0092\u0093\u0003 \u0010\u0000\u0093\u0019\u0001\u0000"+
		"\u0000\u0000\u0094\u0095\u0005\u001b\u0000\u0000\u0095\u0097\u0005\u0003"+
		"\u0000\u0000\u0096\u0098\u0003\"\u0011\u0000\u0097\u0096\u0001\u0000\u0000"+
		"\u0000\u0097\u0098\u0001\u0000\u0000\u0000\u0098\u0099\u0001\u0000\u0000"+
		"\u0000\u0099\u009a\u0005\u0004\u0000\u0000\u009a\u009b\u0003 \u0010\u0000"+
		"\u009b\u001b\u0001\u0000\u0000\u0000\u009c\u009d\u0005\u001a\u0000\u0000"+
		"\u009d\u009e\u0005-\u0000\u0000\u009e\u00a1\u0003&\u0013\u0000\u009f\u00a0"+
		"\u0005\u0007\u0000\u0000\u00a0\u00a2\u0003$\u0012\u0000\u00a1\u009f\u0001"+
		"\u0000\u0000\u0000\u00a1\u00a2\u0001\u0000\u0000\u0000\u00a2\u00a3\u0001"+
		"\u0000\u0000\u0000\u00a3\u00a4\u0003 \u0010\u0000\u00a4\u001d\u0001\u0000"+
		"\u0000\u0000\u00a5\u00a6\u0005-\u0000\u0000\u00a6\u00a7\u0007\u0000\u0000"+
		"\u0000\u00a7\u00a8\u0003$\u0012\u0000\u00a8\u00a9\u0003 \u0010\u0000\u00a9"+
		"\u00b6\u0001\u0000\u0000\u0000\u00aa\u00ab\u0003$\u0012\u0000\u00ab\u00ac"+
		"\u0005\b\u0000\u0000\u00ac\u00ad\u0003$\u0012\u0000\u00ad\u00ae\u0005"+
		"\t\u0000\u0000\u00ae\u00af\u0007\u0000\u0000\u0000\u00af\u00b0\u0003$"+
		"\u0012\u0000\u00b0\u00b1\u0003 \u0010\u0000\u00b1\u00b6\u0001\u0000\u0000"+
		"\u0000\u00b2\u00b3\u0005-\u0000\u0000\u00b3\u00b4\u0007\u0001\u0000\u0000"+
		"\u00b4\u00b6\u0003 \u0010\u0000\u00b5\u00a5\u0001\u0000\u0000\u0000\u00b5"+
		"\u00aa\u0001\u0000\u0000\u0000\u00b5\u00b2\u0001\u0000\u0000\u0000\u00b6"+
		"\u001f\u0001\u0000\u0000\u0000\u00b7\u00b8\u0007\u0002\u0000\u0000\u00b8"+
		"!\u0001\u0000\u0000\u0000\u00b9\u00be\u0003$\u0012\u0000\u00ba\u00bb\u0005"+
		"\u0005\u0000\u0000\u00bb\u00bd\u0003$\u0012\u0000\u00bc\u00ba\u0001\u0000"+
		"\u0000\u0000\u00bd\u00c0\u0001\u0000\u0000\u0000\u00be\u00bc\u0001\u0000"+
		"\u0000\u0000\u00be\u00bf\u0001\u0000\u0000\u0000\u00bf#\u0001\u0000\u0000"+
		"\u0000\u00c0\u00be\u0001\u0000\u0000\u0000\u00c1\u00c2\u0006\u0012\uffff"+
		"\uffff\u0000\u00c2\u00c3\u0005\n\u0000\u0000\u00c3\u00dc\u0003$\u0012"+
		"\u0010\u00c4\u00c5\u0005\u000b\u0000\u0000\u00c5\u00dc\u0003$\u0012\u000f"+
		"\u00c6\u00c7\u0003&\u0013\u0000\u00c7\u00c9\u0005\u0001\u0000\u0000\u00c8"+
		"\u00ca\u0003\"\u0011\u0000\u00c9\u00c8\u0001\u0000\u0000\u0000\u00c9\u00ca"+
		"\u0001\u0000\u0000\u0000\u00ca\u00cb\u0001\u0000\u0000\u0000\u00cb\u00cc"+
		"\u0005\u0002\u0000\u0000\u00cc\u00dc\u0001\u0000\u0000\u0000\u00cd\u00ce"+
		"\u0005-\u0000\u0000\u00ce\u00d0\u0005\u0003\u0000\u0000\u00cf\u00d1\u0003"+
		"\"\u0011\u0000\u00d0\u00cf\u0001\u0000\u0000\u0000\u00d0\u00d1\u0001\u0000"+
		"\u0000\u0000\u00d1\u00d2\u0001\u0000\u0000\u0000\u00d2\u00dc\u0005\u0004"+
		"\u0000\u0000\u00d3\u00d4\u0005\u0003\u0000\u0000\u00d4\u00d5\u0003$\u0012"+
		"\u0000\u00d5\u00d6\u0005\u0004\u0000\u0000\u00d6\u00dc\u0001\u0000\u0000"+
		"\u0000\u00d7\u00dc\u0005-\u0000\u0000\u00d8\u00dc\u0005.\u0000\u0000\u00d9"+
		"\u00dc\u0005/\u0000\u0000\u00da\u00dc\u0005,\u0000\u0000\u00db\u00c1\u0001"+
		"\u0000\u0000\u0000\u00db\u00c4\u0001\u0000\u0000\u0000\u00db\u00c6\u0001"+
		"\u0000\u0000\u0000\u00db\u00cd\u0001\u0000\u0000\u0000\u00db\u00d3\u0001"+
		"\u0000\u0000\u0000\u00db\u00d7\u0001\u0000\u0000\u0000\u00db\u00d8\u0001"+
		"\u0000\u0000\u0000\u00db\u00d9\u0001\u0000\u0000\u0000\u00db\u00da\u0001"+
		"\u0000\u0000\u0000\u00dc\u00f6\u0001\u0000\u0000\u0000\u00dd\u00de\n\u000e"+
		"\u0000\u0000\u00de\u00df\u0007\u0003\u0000\u0000\u00df\u00f5\u0003$\u0012"+
		"\u000f\u00e0\u00e1\n\r\u0000\u0000\u00e1\u00e2\u0007\u0004\u0000\u0000"+
		"\u00e2\u00f5\u0003$\u0012\u000e\u00e3\u00e4\n\f\u0000\u0000\u00e4\u00e5"+
		"\u0007\u0005\u0000\u0000\u00e5\u00f5\u0003$\u0012\r\u00e6\u00e7\n\u000b"+
		"\u0000\u0000\u00e7\u00e8\u0007\u0006\u0000\u0000\u00e8\u00f5\u0003$\u0012"+
		"\f\u00e9\u00ea\n\n\u0000\u0000\u00ea\u00eb\u0005\u0016\u0000\u0000\u00eb"+
		"\u00f5\u0003$\u0012\u000b\u00ec\u00ed\n\t\u0000\u0000\u00ed\u00ee\u0005"+
		"\u0017\u0000\u0000\u00ee\u00f5\u0003$\u0012\n\u00ef\u00f0\n\u0006\u0000"+
		"\u0000\u00f0\u00f1\u0005\b\u0000\u0000\u00f1\u00f2\u0003$\u0012\u0000"+
		"\u00f2\u00f3\u0005\t\u0000\u0000\u00f3\u00f5\u0001\u0000\u0000\u0000\u00f4"+
		"\u00dd\u0001\u0000\u0000\u0000\u00f4\u00e0\u0001\u0000\u0000\u0000\u00f4"+
		"\u00e3\u0001\u0000\u0000\u0000\u00f4\u00e6\u0001\u0000\u0000\u0000\u00f4"+
		"\u00e9\u0001\u0000\u0000\u0000\u00f4\u00ec\u0001\u0000\u0000\u0000\u00f4"+
		"\u00ef\u0001\u0000\u0000\u0000\u00f5\u00f8\u0001\u0000\u0000\u0000\u00f6"+
		"\u00f4\u0001\u0000\u0000\u0000\u00f6\u00f7\u0001\u0000\u0000\u0000\u00f7"+
		"%\u0001\u0000\u0000\u0000\u00f8\u00f6\u0001\u0000\u0000\u0000\u00f9\u0102"+
		"\u0005\u0018\u0000\u0000\u00fa\u0102\u0005\u0019\u0000\u0000\u00fb\u0102"+
		"\u0005*\u0000\u0000\u00fc\u0102\u0005+\u0000\u0000\u00fd\u00fe\u0005\b"+
		"\u0000\u0000\u00fe\u00ff\u0005.\u0000\u0000\u00ff\u0100\u0005\t\u0000"+
		"\u0000\u0100\u0102\u0003&\u0013\u0000\u0101\u00f9\u0001\u0000\u0000\u0000"+
		"\u0101\u00fa\u0001\u0000\u0000\u0000\u0101\u00fb\u0001\u0000\u0000\u0000"+
		"\u0101\u00fc\u0001\u0000\u0000\u0000\u0101\u00fd\u0001\u0000\u0000\u0000"+
		"\u0102\'\u0001\u0000\u0000\u0000\u0016+<BKOXejn{}\u008c\u0097\u00a1\u00b5"+
		"\u00be\u00c9\u00d0\u00db\u00f4\u00f6\u0101";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}