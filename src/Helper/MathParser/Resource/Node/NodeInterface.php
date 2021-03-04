<?php

namespace App\Helper\MathParser\Resource\Node;

/**
 * Interface NodeInterface
 * @package App\Helper\MathParser\Resource\Node
 */
interface NodeInterface
{
    /**
     * @return float
     */
    public function computeValue(): float;
}