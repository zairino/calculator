<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ExpressionValidator
 * @package App\Validator
 */
class ExpressionValidator extends AbstractValidator implements ValidatorInterface
{
    /**
     * @param array $request
     * @param Constraint|null $properties
     * @return bool
     * @throws \App\Exceptions\ValidationFailedException
     */
    public function validate(array $request, ?Constraint $properties = null): bool
    {
        return parent::validate($request, $this->getConstraint());
    }

    /**
     * @return Collection|null
     */
    public function getConstraint(): ?Collection
    {
        return new Assert\Collection([
            'fields' => [
                'expression' => [
                    new Assert\NotNull(),
                    new Assert\NotBlank(),
                    new Assert\Type('string'),
                    new Assert\Regex("/^([\+\-*\/\.]?(\d+%?))+/")
                ]
            ]
        ]);
    }
}