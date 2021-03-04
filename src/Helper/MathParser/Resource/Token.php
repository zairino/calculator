<?php

namespace App\Helper\MathParser\Resource;

/**
 * Class Token
 * @package App\Helper\MathParser\Resource
 */
class Token
{
    public const NUMBER_TYPE = 1;
    public const OPERATOR_TYPE = 10;

    /**
     * @var string|int
     */
    private $value;

    /**
     * @var int
     */
    private $type;

    /***
     * Token constructor.
     * @param $value
     * @param int $type
     */
    public function __construct($value, int $type)
    {
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function length(): int
    {
        return strlen($this->value);
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
}