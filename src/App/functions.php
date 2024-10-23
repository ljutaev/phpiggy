<?php

declare(strict_types=1);

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function e(mixed $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function redirectTo(string $path): void
{
    header("Location: $path");
    http_response_code(302);
    exit;
}