<?php

namespace App\Helper\MathParser;

use App\Helper\MathParser\Resource\Token;
use App\Helper\MathParser\Resource\Node\NumberNode;
use App\Helper\MathParser\Resource\Node\NodeInterface;
use App\Helper\MathParser\Resource\Node\OperationNode;

/**
 * Class Parser
 * @package App\Helper\MathParser
 */
class Parser
{
    /**
     * @param array $tokenList
     * @return NodeInterface
     * @throws \Exception
     */
    public function parse(array $tokenList)
    {
        $operandCollection = [];
        $operationCollection = [];

        for ($i = 0; $i < count($tokenList); $i++) {
            $node = $this->buildNode($tokenList[$i]);

            if ($node instanceof NumberNode) {
                $operandCollection[] = $node;
            } elseif ($node instanceof OperationNode) { // instance of OperationNode
                $lastOperation = end($operationCollection);
                if ($lastOperation === false) {
                    $operationCollection[] = $node;
                } else {
                    while($lastOperation !== false && $node->isPrecedenceInferior($lastOperation)) {
                        $operation = array_pop($operationCollection);
                        $operation->setRight(array_pop($operandCollection));
                        $operation->setLeft(array_pop($operandCollection));
                        $operandCollection[] = $operation;

                        $lastOperation = end($operationCollection);
                    }

                    $operationCollection[] = $node;
                }
            }
        }

        while (!empty($operationCollection)) {
            $operation = array_pop($operationCollection);
            $operation->setRight(array_pop($operandCollection));
            $operation->setLeft(array_pop($operandCollection));
            $operandCollection[] = $operation;
        }

        $tree = array_pop($operandCollection);

        return $tree;
    }

    /**
     * @param Token $token
     * @return NodeInterface|null
     * @throws \Exception
     */
    private function buildNode(Token $token)
    {
        switch($token->getType()) {
            case Token::OPERATOR_TYPE:
                $node = new OperationNode($token->getValue());
                break;
            case Token::NUMBER_TYPE:
                $node = new NumberNode($token->getValue());
                break;
            default:
                $node = null;
        }

        if ($node === null) {
            throw new \Exception("Parser exception : unknow token type");
        }

        return $node;
    }
}