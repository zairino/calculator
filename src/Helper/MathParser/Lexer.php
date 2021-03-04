<?php

namespace App\Helper\MathParser;

use App\Helper\MathParser\Resource\Token;

/**
 * Class Lexer
 * @package App\Helper\MathParser
 */
class Lexer
{
    /**
     * @param string $input
     * @return array
     * @throws \Exception
     */
    public function tokenize(string $input)
    {
        $tokens = [];

        $index = 0;

        while($index < strlen($input))
        {
            $toEvaluate = substr($input,$index);

            if ($result = preg_match('/^(\d+(\.\d+)?)/', $toEvaluate, $matches)) {
                $tokenType = Token::NUMBER_TYPE;
            } elseif (preg_match('/^[\+\/\-\*]/', $toEvaluate, $matches)) {
                $tokenType = Token::OPERATOR_TYPE;
            } else {
                throw new \Exception('Invalid input provided');
            }

            $token = new Token($matches[0], $tokenType);

            $tokens[] = $token;
            $index += $token->length();
        }

        return $tokens;
    }
}