<?php

namespace App\Service;

use App\Helper\MathParser\Lexer;
use App\Helper\MathParser\Parser;

/**
 * Class CalculatorService
 * @package App\Service
 */
class CalculatorService
{
    /**
     * @var Lexer
     */
    private $lexer;
    /**
     * @var Parser
     */
    private $parser;

    /**
     * CalculatorService constructor.
     */
    public function __construct()
    {
        $this->lexer = new Lexer();
        $this->parser = new Parser();
    }

    /**
     * @param string $expression
     * @return mixed
     * @throws \Exception
     */
    public function evaluateExpression(string $expression)
    {
        $tokenList = $this->lexer->tokenize($expression);
        $tree = $this->parser->parse($tokenList);

        return $tree->computeValue();
    }
}