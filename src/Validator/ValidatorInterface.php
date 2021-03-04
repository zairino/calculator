<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * Interface ValidatorInterface
 * @package App\Validator
 */
interface ValidatorInterface
{
    /**
     * @param array $request
     * @param Constraint|null $properties
     * @return mixed
     */
    public function validate(array $request, ?Constraint $properties = null): bool;

    /**
     * @return Collection|null
     */
    public function getConstraint(): ?Collection;
}