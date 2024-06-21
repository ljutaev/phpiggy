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