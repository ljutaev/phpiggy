<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\ValidatorService;
class AuthController
{
    public function __construct(
        private TemplateEngine $view,
        private ValidatorService $validatorService
    )
    {
    }

    public function index(): void
    {
        echo $this->view->render('/register.php');
    }

    public function register(): void
    {
//       dd($_POST);
       $this->validatorService->validateRegister($_POST);
    }
}
