<?php

declare(strict_types=1);

use Framework\TemplateEngine;
use App\Services\ValidatorService;
use App\Config\Paths;

return [
    TemplateEngine::class => fn() => new TemplateEngine(Paths::VIEW),
    ValidatorService::class => fn() => new ValidatorService(),
];