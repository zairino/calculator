<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * Class ValidationFailedException
 * @package App\Exceptions
 */
class ValidationFailedException extends \Exception
{
    /**
     * @var array
     */
    private $errors;

    /**
     * ValidationFailedException constructor.
     * @param ConstraintViolationListInterface $constraintViolationList
     * @param \Throwable|null $previous
     */
    public function __construct(ConstraintViolationListInterface $constraintViolationList, \Throwable $previous = null)
    {
        parent::__construct($constraintViolationList, Response::HTTP_BAD_REQUEST, $previous);

        $this->errors = $this->formatErrors($constraintViolationList);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ConstraintViolationListInterface $constraintViolationList
     * @return array
     */
    private function formatErrors(ConstraintViolationListInterface $constraintViolationList)
    {
        $errors = [];

        foreach($constraintViolationList as $violation) {
            $errors[] = [
                'property_path' => $violation->getPropertyPath(),
                'invalid_value' => $violation->getInvalidValue(),
                'violation'     => $violation->getMessage()
            ];
        }

        return $errors;
    }
}