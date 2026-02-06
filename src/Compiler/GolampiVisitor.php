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
	 * Visit a parse tree produced by the `Assignment` labeled alternative
	 * in {@see GolampiParser::assignStmt()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::expressionList()}.
	 *
	 * @param Context\ExpressionListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressionList(Context\ExpressionListContext $context);

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
	 * Visit a parse tree produced by the `MulDivExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\MulDivExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulDivExpr(Context\MulDivExprContext $context);

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
	 * Visit a parse tree produced by the `StrExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\StrExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStrExpr(Context\StrExprContext $context);

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
	 * Visit a parse tree produced by {@see GolampiParser::type()}.
	 *
	 * @param Context\TypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType(Context\TypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GolampiParser::stmtTerminator()}.
	 *
	 * @param Context\StmtTerminatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtTerminator(Context\StmtTerminatorContext $context);
}