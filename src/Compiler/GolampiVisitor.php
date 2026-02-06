<?php

/*
 * Generated from grammar/Golampi.g4 by ANTLR 4.13.1
 */

namespace App\Compiler;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GolampiParser}.
 */
interface GolampiVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GolampiParser::file()}.
	 *
	 * @param Context\FileContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFile(Context\FileContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::instruction()}.
	 *
	 * @param Context\InstructionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInstruction(Context\InstructionContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::block()}.
	 *
	 * @param Context\BlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlock(Context\BlockContext $context);

	/**
	 * Visit a parse tree produced by the `FuncDeclaration` labeled alternative
	 * in {@see GolampiParser::funcDecl()}.
	 *
	 * @param Context\FuncDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncDeclaration(Context\FuncDeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::paramList()}.
	 *
	 * @param Context\ParamListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParamList(Context\ParamListContext $context);

	/**
	 * Visit a parse tree produced by the `ParamDef` labeled alternative
	 * in {@see GolampiParser::param()}.
	 *
	 * @param Context\ParamDefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParamDef(Context\ParamDefContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::typeList()}.
	 *
	 * @param Context\TypeListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeList(Context\TypeListContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::returnStmt()}.
	 *
	 * @param Context\ReturnStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnStmt(Context\ReturnStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::exprStmt()}.
	 *
	 * @param Context\ExprStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprStmt(Context\ExprStmtContext $context);

	/**
	 * Visit a parse tree produced by the `IfStatement` labeled alternative
	 * in {@see GolampiParser::ifStmt()}.
	 *
	 * @param Context\IfStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStatement(Context\IfStatementContext $context);

	/**
	 * Visit a parse tree produced by the `ForClassic` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 *
	 * @param Context\ForClassicContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForClassic(Context\ForClassicContext $context);

	/**
	 * Visit a parse tree produced by the `ForWhile` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 *
	 * @param Context\ForWhileContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForWhile(Context\ForWhileContext $context);

	/**
	 * Visit a parse tree produced by the `ForInfinite` labeled alternative
	 * in {@see GolampiParser::forStmt()}.
	 *
	 * @param Context\ForInfiniteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForInfinite(Context\ForInfiniteContext $context);

	/**
	 * Visit a parse tree produced by the `SwitchStatement` labeled alternative
	 * in {@see GolampiParser::switchStmt()}.
	 *
	 * @param Context\SwitchStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchStatement(Context\SwitchStatementContext $context);

	/**
	 * Visit a parse tree produced by the `CaseBlock` labeled alternative
	 * in {@see GolampiParser::switchCase()}.
	 *
	 * @param Context\CaseBlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCaseBlock(Context\CaseBlockContext $context);

	/**
	 * Visit a parse tree produced by the `DefaultBlock` labeled alternative
	 * in {@see GolampiParser::switchCase()}.
	 *
	 * @param Context\DefaultBlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefaultBlock(Context\DefaultBlockContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::breakStmt()}.
	 *
	 * @param Context\BreakStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBreakStmt(Context\BreakStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::continueStmt()}.
	 *
	 * @param Context\ContinueStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContinueStmt(Context\ContinueStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::printStmt()}.
	 *
	 * @param Context\PrintStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrintStmt(Context\PrintStmtContext $context);

	/**
	 * Visit a parse tree produced by the `VarDeclaration` labeled alternative
	 * in {@see GolampiParser::varDecl()}.
	 *
	 * @param Context\VarDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarDeclaration(Context\VarDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `ConstDeclaration` labeled alternative
	 * in {@see GolampiParser::constDecl()}.
	 *
	 * @param Context\ConstDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstDeclaration(Context\ConstDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `ShortVarDeclaration` labeled alternative
	 * in {@see GolampiParser::shortVarDecl()}.
	 *
	 * @param Context\ShortVarDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortVarDeclaration(Context\ShortVarDeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::idList()}.
	 *
	 * @param Context\IdListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdList(Context\IdListContext $context);

	/**
	 * Visit a parse tree produced by the `PtrAssignment` labeled alternative
	 * in {@see GolampiParser::assignStmt()}.
	 *
	 * @param Context\PtrAssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPtrAssignment(Context\PtrAssignmentContext $context);

	/**
	 * Visit a parse tree produced by the `Assignment` labeled alternative
	 * in {@see GolampiParser::assignStmt()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayAssignment` labeled alternative
	 * in {@see GolampiParser::assignStmt()}.
	 *
	 * @param Context\ArrayAssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAssignment(Context\ArrayAssignmentContext $context);

	/**
	 * Visit a parse tree produced by the `IncrementDecrement` labeled alternative
	 * in {@see GolampiParser::assignStmt()}.
	 *
	 * @param Context\IncrementDecrementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncrementDecrement(Context\IncrementDecrementContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::stmtTerminator()}.
	 *
	 * @param Context\StmtTerminatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtTerminator(Context\StmtTerminatorContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::expressionList()}.
	 *
	 * @param Context\ExpressionListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressionList(Context\ExpressionListContext $context);

	/**
	 * Visit a parse tree produced by the `AndExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\AndExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndExpr(Context\AndExprContext $context);

	/**
	 * Visit a parse tree produced by the `BoolExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\BoolExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBoolExpr(Context\BoolExprContext $context);

	/**
	 * Visit a parse tree produced by the `FloatExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\FloatExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFloatExpr(Context\FloatExprContext $context);

	/**
	 * Visit a parse tree produced by the `NilExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\NilExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNilExpr(Context\NilExprContext $context);

	/**
	 * Visit a parse tree produced by the `IdExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\IdExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdExpr(Context\IdExprContext $context);

	/**
	 * Visit a parse tree produced by the `DerefExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\DerefExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDerefExpr(Context\DerefExprContext $context);

	/**
	 * Visit a parse tree produced by the `RelExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\RelExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelExpr(Context\RelExprContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayAccessExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\ArrayAccessExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAccessExpr(Context\ArrayAccessExprContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayLiteral` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\ArrayLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayLiteral(Context\ArrayLiteralContext $context);

	/**
	 * Visit a parse tree produced by the `OrExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\OrExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrExpr(Context\OrExprContext $context);

	/**
	 * Visit a parse tree produced by the `RuneExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\RuneExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRuneExpr(Context\RuneExprContext $context);

	/**
	 * Visit a parse tree produced by the `MulDivExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\MulDivExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulDivExpr(Context\MulDivExprContext $context);

	/**
	 * Visit a parse tree produced by the `AddressOfExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\AddressOfExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddressOfExpr(Context\AddressOfExprContext $context);

	/**
	 * Visit a parse tree produced by the `EqExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\EqExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEqExpr(Context\EqExprContext $context);

	/**
	 * Visit a parse tree produced by the `StrExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\StrExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStrExpr(Context\StrExprContext $context);

	/**
	 * Visit a parse tree produced by the `CallExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\CallExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCallExpr(Context\CallExprContext $context);

	/**
	 * Visit a parse tree produced by the `NotExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\NotExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNotExpr(Context\NotExprContext $context);

	/**
	 * Visit a parse tree produced by the `IntExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\IntExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntExpr(Context\IntExprContext $context);

	/**
	 * Visit a parse tree produced by the `ParenExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\ParenExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParenExpr(Context\ParenExprContext $context);

	/**
	 * Visit a parse tree produced by the `AddSubExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\AddSubExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddSubExpr(Context\AddSubExprContext $context);

	/**
	 * Visit a parse tree produced by the `UnaryMinusExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\UnaryMinusExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryMinusExpr(Context\UnaryMinusExprContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::type()}.
	 *
	 * @param Context\TypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType(Context\TypeContext $context);
}