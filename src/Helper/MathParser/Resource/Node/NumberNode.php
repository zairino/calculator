<?php

namespace App\Helper\MathParser\Resource\Node;

/**
 * Class NumberNode
 * @package App\Helper\MathParser\Parser\Node
 */
class NumberNode implements NodeInterface
{
    /**
     * @var float
     */
    private $value;

    /**
     * NumberNode constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = floatval($value);
    }

    /**
     * @return float
     */
    public function computeValue(): float
    {
        return $this->value;
    }
}