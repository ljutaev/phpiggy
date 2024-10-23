<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Controllers\{HomeController, AboutController, AuthController};

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/about', [AboutController::class, 'index']);

    $app->get('/register', [AuthController::class, 'index']);

    $app->post('/register', [AuthController::class, 'register']);

}