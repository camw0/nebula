<?php

namespace Nebula\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @throws AccessDeniedHttpException
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (!$request->user() || !$request->user()->admin) {
            throw new AccessDeniedHttpException();
        }

        return $next($request);
    }
}
