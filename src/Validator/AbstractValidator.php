<?php

namespace App\Validator;

use App\Exceptions\ValidationFailedException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class AbstractValidator
 * @package App\Validator
 */
class AbstractValidator
{
    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * AbstractValidator constructor.
     * @param ValidatorInterface $validator
     */
    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param array $request
     * @param null|Constraint $properties
     * @return bool
     * @throws ValidationFailedException
     */
    public function validate(array $request, ?Constraint $properties = null): bool
    {
        $validator = Validation::createValidator();
        $violations = $validator->validate($request, $properties);

        if (count($violations) > 0){
            throw new ValidationFailedException($violations);
        }

        return true;
    }
}