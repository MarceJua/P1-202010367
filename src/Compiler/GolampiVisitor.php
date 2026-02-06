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
	 * Visit a parse tree produced by {@see GolampiParser::expressionList()}.
	 *
	 * @param Context\ExpressionListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressionList(Context\ExpressionListContext $context);

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
	 * Visit a parse tree produced by the `IntExpr` labeled alternative
	 * in {@see GolampiParser::expression()}.
	 *
	 * @param Context\IntExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntExpr(Context\IntExprContext $context);

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
	 * Visit a parse tree produced by {@see GolampiParser::stmtTerminator()}.
	 *
	 * @param Context\StmtTerminatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtTerminator(Context\StmtTerminatorContext $context);
}