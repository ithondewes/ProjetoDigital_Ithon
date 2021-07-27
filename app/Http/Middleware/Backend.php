<?php

namespace ProjetoDigital\Http\Middleware;

use Closure;

class Backend
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (auth()->check() && $user->isBackendWorker() && $user->isActive()) {
            return $next($request);
        }

        abort(403);
    }
}
