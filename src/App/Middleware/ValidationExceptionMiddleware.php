<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\middlewareInterface;
use Framework\Exceptions\ValidationException;

class ValidationExceptionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        try {
            return $next();
        } catch (ValidationException $e) {
            $oldFormData = $_POST ?? [];

            $exludeFields = ['password', 'confirmPassword'];

            $formattedFormData = array_filter($oldFormData, function ($key) use ($exludeFields) {
                return !in_array($key, $exludeFields);
            }, ARRAY_FILTER_USE_KEY);

            $_SESSION['errors'] = $e->errors;
            $_SESSION['oldFormData'] = $formattedFormData;
            $referer = $_SERVER['HTTP_REFERER'] ?? '/';
            redirectTo('/register');
        }
    }
}