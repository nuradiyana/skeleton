<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

final class RedirectIfAuthenticated
{
    /**
     * @psalm-suppress MissingParamType
     * @psalm-suppress MissingReturnType
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
