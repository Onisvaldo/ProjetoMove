<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClinicaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Add your middleware logic here

                return $next($request);
            }
        }