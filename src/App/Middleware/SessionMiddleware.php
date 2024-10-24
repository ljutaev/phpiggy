<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;

class SessionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        if(session_status() === PHP_SESSION_ACTIVE) {
           throw new SessionException('Session already started');
        }

        if(headers_sent($file, $line   )) {
            throw new SessionException('Headers already sent. Consider enabling otput buffering. File: $file, Line: $line');
        }

        session_start();

        $next();

        session_write_close();
    }
}