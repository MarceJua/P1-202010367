// Generated from /home/marcelo/Desktop/P1-202010367/grammar/Golampi.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.Lexer;
import org.antlr.v4.runtime.CharStream;
import org.antlr.v4.runtime.Token;
import org.antlr.v4.runtime.TokenStream;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.misc.*;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue", "this-escape"})
public class GolampiLexer extends Lexer {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, T__11=12, VAR=13, FMT=14, TYPE_INT=15, TYPE_STRING=16, 
		TYPE_BOOL=17, BOOL=18, ID=19, INT=20, STRING=21, COMMENT=22, WS=23, NEWLINE=24;
	public static String[] channelNames = {
		"DEFAULT_TOKEN_CHANNEL", "HIDDEN"
	};

	public static String[] modeNames = {
		"DEFAULT_MODE"
	};

	private static String[] makeRuleNames() {
		return new String[] {
			"T__0", "T__1", "T__2", "T__3", "T__4", "T__5", "T__6", "T__7", "T__8", 
			"T__9", "T__10", "T__11", "VAR", "FMT", "TYPE_INT", "TYPE_STRING", "TYPE_BOOL", 
			"BOOL", "ID", "INT", "STRING", "COMMENT", "WS", "NEWLINE"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'('", "')'", "'='", "','", "'*'", "'/'", "'%'", "'+'", "'-'", 
			"'int'", "'int32'", "';'", "'var'", "'fmt.Println'", null, "'string'", 
			"'bool'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, "VAR", "FMT", "TYPE_INT", "TYPE_STRING", "TYPE_BOOL", "BOOL", "ID", 
			"INT", "STRING", "COMMENT", "WS", "NEWLINE"
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


	public GolampiLexer(CharStream input) {
		super(input);
		_interp = new LexerATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@Override
	public String getGrammarFileName() { return "Golampi.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public String[] getChannelNames() { return channelNames; }

	@Override
	public String[] getModeNames() { return modeNames; }

	@Override
	public ATN getATN() { return _ATN; }

	public static final String _serializedATN =
		"\u0004\u0000\u0018\u00ac\u0006\uffff\uffff\u0002\u0000\u0007\u0000\u0002"+
		"\u0001\u0007\u0001\u0002\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002"+
		"\u0004\u0007\u0004\u0002\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002"+
		"\u0007\u0007\u0007\u0002\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002"+
		"\u000b\u0007\u000b\u0002\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e"+
		"\u0002\u000f\u0007\u000f\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011"+
		"\u0002\u0012\u0007\u0012\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014"+
		"\u0002\u0015\u0007\u0015\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017"+
		"\u0001\u0000\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0002\u0001\u0002"+
		"\u0001\u0003\u0001\u0003\u0001\u0004\u0001\u0004\u0001\u0005\u0001\u0005"+
		"\u0001\u0006\u0001\u0006\u0001\u0007\u0001\u0007\u0001\b\u0001\b\u0001"+
		"\t\u0001\t\u0001\t\u0001\t\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001"+
		"\n\u0001\u000b\u0001\u000b\u0001\f\u0001\f\u0001\f\u0001\f\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000e\u0003\u000eh\b\u000e\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0011"+
		"\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011"+
		"\u0001\u0011\u0001\u0011\u0003\u0011\u007f\b\u0011\u0001\u0012\u0001\u0012"+
		"\u0005\u0012\u0083\b\u0012\n\u0012\f\u0012\u0086\t\u0012\u0001\u0013\u0004"+
		"\u0013\u0089\b\u0013\u000b\u0013\f\u0013\u008a\u0001\u0014\u0001\u0014"+
		"\u0005\u0014\u008f\b\u0014\n\u0014\f\u0014\u0092\t\u0014\u0001\u0014\u0001"+
		"\u0014\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0005\u0015\u009a"+
		"\b\u0015\n\u0015\f\u0015\u009d\t\u0015\u0001\u0015\u0001\u0015\u0001\u0016"+
		"\u0004\u0016\u00a2\b\u0016\u000b\u0016\f\u0016\u00a3\u0001\u0016\u0001"+
		"\u0016\u0001\u0017\u0004\u0017\u00a9\b\u0017\u000b\u0017\f\u0017\u00aa"+
		"\u0000\u0000\u0018\u0001\u0001\u0003\u0002\u0005\u0003\u0007\u0004\t\u0005"+
		"\u000b\u0006\r\u0007\u000f\b\u0011\t\u0013\n\u0015\u000b\u0017\f\u0019"+
		"\r\u001b\u000e\u001d\u000f\u001f\u0010!\u0011#\u0012%\u0013\'\u0014)\u0015"+
		"+\u0016-\u0017/\u0018\u0001\u0000\u0006\u0003\u0000AZ__az\u0004\u0000"+
		"09AZ__az\u0001\u000009\u0001\u0000\"\"\u0002\u0000\n\n\r\r\u0002\u0000"+
		"\t\t  \u00b3\u0000\u0001\u0001\u0000\u0000\u0000\u0000\u0003\u0001\u0000"+
		"\u0000\u0000\u0000\u0005\u0001\u0000\u0000\u0000\u0000\u0007\u0001\u0000"+
		"\u0000\u0000\u0000\t\u0001\u0000\u0000\u0000\u0000\u000b\u0001\u0000\u0000"+
		"\u0000\u0000\r\u0001\u0000\u0000\u0000\u0000\u000f\u0001\u0000\u0000\u0000"+
		"\u0000\u0011\u0001\u0000\u0000\u0000\u0000\u0013\u0001\u0000\u0000\u0000"+
		"\u0000\u0015\u0001\u0000\u0000\u0000\u0000\u0017\u0001\u0000\u0000\u0000"+
		"\u0000\u0019\u0001\u0000\u0000\u0000\u0000\u001b\u0001\u0000\u0000\u0000"+
		"\u0000\u001d\u0001\u0000\u0000\u0000\u0000\u001f\u0001\u0000\u0000\u0000"+
		"\u0000!\u0001\u0000\u0000\u0000\u0000#\u0001\u0000\u0000\u0000\u0000%"+
		"\u0001\u0000\u0000\u0000\u0000\'\u0001\u0000\u0000\u0000\u0000)\u0001"+
		"\u0000\u0000\u0000\u0000+\u0001\u0000\u0000\u0000\u0000-\u0001\u0000\u0000"+
		"\u0000\u0000/\u0001\u0000\u0000\u0000\u00011\u0001\u0000\u0000\u0000\u0003"+
		"3\u0001\u0000\u0000\u0000\u00055\u0001\u0000\u0000\u0000\u00077\u0001"+
		"\u0000\u0000\u0000\t9\u0001\u0000\u0000\u0000\u000b;\u0001\u0000\u0000"+
		"\u0000\r=\u0001\u0000\u0000\u0000\u000f?\u0001\u0000\u0000\u0000\u0011"+
		"A\u0001\u0000\u0000\u0000\u0013C\u0001\u0000\u0000\u0000\u0015G\u0001"+
		"\u0000\u0000\u0000\u0017M\u0001\u0000\u0000\u0000\u0019O\u0001\u0000\u0000"+
		"\u0000\u001bS\u0001\u0000\u0000\u0000\u001dg\u0001\u0000\u0000\u0000\u001f"+
		"i\u0001\u0000\u0000\u0000!p\u0001\u0000\u0000\u0000#~\u0001\u0000\u0000"+
		"\u0000%\u0080\u0001\u0000\u0000\u0000\'\u0088\u0001\u0000\u0000\u0000"+
		")\u008c\u0001\u0000\u0000\u0000+\u0095\u0001\u0000\u0000\u0000-\u00a1"+
		"\u0001\u0000\u0000\u0000/\u00a8\u0001\u0000\u0000\u000012\u0005(\u0000"+
		"\u00002\u0002\u0001\u0000\u0000\u000034\u0005)\u0000\u00004\u0004\u0001"+
		"\u0000\u0000\u000056\u0005=\u0000\u00006\u0006\u0001\u0000\u0000\u0000"+
		"78\u0005,\u0000\u00008\b\u0001\u0000\u0000\u00009:\u0005*\u0000\u0000"+
		":\n\u0001\u0000\u0000\u0000;<\u0005/\u0000\u0000<\f\u0001\u0000\u0000"+
		"\u0000=>\u0005%\u0000\u0000>\u000e\u0001\u0000\u0000\u0000?@\u0005+\u0000"+
		"\u0000@\u0010\u0001\u0000\u0000\u0000AB\u0005-\u0000\u0000B\u0012\u0001"+
		"\u0000\u0000\u0000CD\u0005i\u0000\u0000DE\u0005n\u0000\u0000EF\u0005t"+
		"\u0000\u0000F\u0014\u0001\u0000\u0000\u0000GH\u0005i\u0000\u0000HI\u0005"+
		"n\u0000\u0000IJ\u0005t\u0000\u0000JK\u00053\u0000\u0000KL\u00052\u0000"+
		"\u0000L\u0016\u0001\u0000\u0000\u0000MN\u0005;\u0000\u0000N\u0018\u0001"+
		"\u0000\u0000\u0000OP\u0005v\u0000\u0000PQ\u0005a\u0000\u0000QR\u0005r"+
		"\u0000\u0000R\u001a\u0001\u0000\u0000\u0000ST\u0005f\u0000\u0000TU\u0005"+
		"m\u0000\u0000UV\u0005t\u0000\u0000VW\u0005.\u0000\u0000WX\u0005P\u0000"+
		"\u0000XY\u0005r\u0000\u0000YZ\u0005i\u0000\u0000Z[\u0005n\u0000\u0000"+
		"[\\\u0005t\u0000\u0000\\]\u0005l\u0000\u0000]^\u0005n\u0000\u0000^\u001c"+
		"\u0001\u0000\u0000\u0000_`\u0005i\u0000\u0000`a\u0005n\u0000\u0000ah\u0005"+
		"t\u0000\u0000bc\u0005i\u0000\u0000cd\u0005n\u0000\u0000de\u0005t\u0000"+
		"\u0000ef\u00053\u0000\u0000fh\u00052\u0000\u0000g_\u0001\u0000\u0000\u0000"+
		"gb\u0001\u0000\u0000\u0000h\u001e\u0001\u0000\u0000\u0000ij\u0005s\u0000"+
		"\u0000jk\u0005t\u0000\u0000kl\u0005r\u0000\u0000lm\u0005i\u0000\u0000"+
		"mn\u0005n\u0000\u0000no\u0005g\u0000\u0000o \u0001\u0000\u0000\u0000p"+
		"q\u0005b\u0000\u0000qr\u0005o\u0000\u0000rs\u0005o\u0000\u0000st\u0005"+
		"l\u0000\u0000t\"\u0001\u0000\u0000\u0000uv\u0005t\u0000\u0000vw\u0005"+
		"r\u0000\u0000wx\u0005u\u0000\u0000x\u007f\u0005e\u0000\u0000yz\u0005f"+
		"\u0000\u0000z{\u0005a\u0000\u0000{|\u0005l\u0000\u0000|}\u0005s\u0000"+
		"\u0000}\u007f\u0005e\u0000\u0000~u\u0001\u0000\u0000\u0000~y\u0001\u0000"+
		"\u0000\u0000\u007f$\u0001\u0000\u0000\u0000\u0080\u0084\u0007\u0000\u0000"+
		"\u0000\u0081\u0083\u0007\u0001\u0000\u0000\u0082\u0081\u0001\u0000\u0000"+
		"\u0000\u0083\u0086\u0001\u0000\u0000\u0000\u0084\u0082\u0001\u0000\u0000"+
		"\u0000\u0084\u0085\u0001\u0000\u0000\u0000\u0085&\u0001\u0000\u0000\u0000"+
		"\u0086\u0084\u0001\u0000\u0000\u0000\u0087\u0089\u0007\u0002\u0000\u0000"+
		"\u0088\u0087\u0001\u0000\u0000\u0000\u0089\u008a\u0001\u0000\u0000\u0000"+
		"\u008a\u0088\u0001\u0000\u0000\u0000\u008a\u008b\u0001\u0000\u0000\u0000"+
		"\u008b(\u0001\u0000\u0000\u0000\u008c\u0090\u0005\"\u0000\u0000\u008d"+
		"\u008f\b\u0003\u0000\u0000\u008e\u008d\u0001\u0000\u0000\u0000\u008f\u0092"+
		"\u0001\u0000\u0000\u0000\u0090\u008e\u0001\u0000\u0000\u0000\u0090\u0091"+
		"\u0001\u0000\u0000\u0000\u0091\u0093\u0001\u0000\u0000\u0000\u0092\u0090"+
		"\u0001\u0000\u0000\u0000\u0093\u0094\u0005\"\u0000\u0000\u0094*\u0001"+
		"\u0000\u0000\u0000\u0095\u0096\u0005/\u0000\u0000\u0096\u0097\u0005/\u0000"+
		"\u0000\u0097\u009b\u0001\u0000\u0000\u0000\u0098\u009a\b\u0004\u0000\u0000"+
		"\u0099\u0098\u0001\u0000\u0000\u0000\u009a\u009d\u0001\u0000\u0000\u0000"+
		"\u009b\u0099\u0001\u0000\u0000\u0000\u009b\u009c\u0001\u0000\u0000\u0000"+
		"\u009c\u009e\u0001\u0000\u0000\u0000\u009d\u009b\u0001\u0000\u0000\u0000"+
		"\u009e\u009f\u0006\u0015\u0000\u0000\u009f,\u0001\u0000\u0000\u0000\u00a0"+
		"\u00a2\u0007\u0005\u0000\u0000\u00a1\u00a0\u0001\u0000\u0000\u0000\u00a2"+
		"\u00a3\u0001\u0000\u0000\u0000\u00a3\u00a1\u0001\u0000\u0000\u0000\u00a3"+
		"\u00a4\u0001\u0000\u0000\u0000\u00a4\u00a5\u0001\u0000\u0000\u0000\u00a5"+
		"\u00a6\u0006\u0016\u0000\u0000\u00a6.\u0001\u0000\u0000\u0000\u00a7\u00a9"+
		"\u0007\u0004\u0000\u0000\u00a8\u00a7\u0001\u0000\u0000\u0000\u00a9\u00aa"+
		"\u0001\u0000\u0000\u0000\u00aa\u00a8\u0001\u0000\u0000\u0000\u00aa\u00ab"+
		"\u0001\u0000\u0000\u0000\u00ab0\u0001\u0000\u0000\u0000\t\u0000g~\u0084"+
		"\u008a\u0090\u009b\u00a3\u00aa\u0001\u0006\u0000\u0000";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}