<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MedicoMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->tipo === 'medico') {
            return $next($request);
        }

        abort(403, 'Acesso não autorizado.');
    }
}
