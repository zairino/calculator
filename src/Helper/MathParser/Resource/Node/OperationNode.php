<?php

namespace App\Helper\MathParser\Resource\Node;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class OperationNode
 * @package App\Helper\MathParser\Resource\Node
 */
class OperationNode implements NodeInterface
{
    private CONST PLUS = '+';
    private CONST MINUS = '-';
    private CONST MULTIPLE = '*';
    private CONST DIVIDE = '/';

    /**
     * @var string
     */
    private $value;

    /**
     * @var NodeInterface|null $left
     */
    private $left;

    /**
     * @var NodeInterface|null $right
     */
    private $right;

    /**
     * OperationNode constructor.
     * @param $value
     * @param $left
     * @param $right
     */
    public function __construct($value, ?NodeInterface $left = null, ?NodeInterface $right = null)
    {
        $this->value = trim($value);
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return NodeInterface|null
     */
    public function getLeft(): ?NodeInterface
    {
        return $this->left;
    }

    /**
     * @param NodeInterface|null $left
     */
    public function setLeft(?NodeInterface $left): void
    {
        $this->left = $left;
    }

    /**
     * @return NodeInterface|null
     */
    public function getRight(): ?NodeInterface
    {
        return $this->right;
    }

    /**
     * @param NodeInterface|null $right
     */
    public function setRight(?NodeInterface $right): void
    {
        $this->right = $right;
    }

    /**
     * @return float|int
     * @throws \Exception
     */
    public function computeValue(): float
    {
        $left  = $this->left !== null ? $this->left->computeValue() : 0;
        $right = $this->right !== null ? $this->right->computeValue() : 0;

        switch ($this->value) {
            case self::PLUS:
                $result = $left + $right;
                break;
            case self::MINUS:
                $result = $left - $right;
                break;
            case self::MULTIPLE:
                $result = $left * $right;
                break;
            case self::DIVIDE:
                if ($right == 0) {
                    throw new \Exception('Expression evaluation exception : Division by zero', Response::HTTP_BAD_REQUEST);
                }

                $result = $left / $right;
                break;
            default:
                $result = 0;
                break;
        }

        return $result;
    }

    /**
     * @return int
     */
    public function getPrecedence(): int
    {
        switch($this->value) {
            case self::MULTIPLE:
            case self::DIVIDE:
                $result = 10;
                break;
            case self::PLUS:
            case self::MINUS:
            default:
                $result = 1;
                break;
        }

        return $result;
    }

    /**
     * @param OperationNode $operationNode
     * @return bool
     */
    public function isPrecedenceInferior(OperationNode $operationNode): bool
    {
        return $this->getPrecedence() <= $operationNode->getPrecedence();
    }
}