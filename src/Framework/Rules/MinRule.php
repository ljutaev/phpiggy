<?php


declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;
use InvalidArgumentException;

class MinRule implements RuleInterface
{
    public function validate(array $formData, string $field, array $params = []): bool
    {
        if (empty($params[0])) {
            throw new InvalidArgumentException('Minimu Invalid field name');
        }

        return (int) $formData[$field] >= (int) $params[0];
    }

    public function getMessage(array $formData, string $field, array $params = []): string
    {
        return "Must be at least {$params[0]} characters long";
    }
}