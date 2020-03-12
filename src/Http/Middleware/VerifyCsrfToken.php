<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

final class VerifyCsrfToken extends Middleware
{
    /**
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * @var array
     */
    protected $except = [];
}
