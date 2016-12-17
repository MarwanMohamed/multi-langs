<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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
        // Check if admin has a permission to login admin panal
         if (Auth::check() && Auth::user()->isAdmin == 1 ) {
            return $next($request);
        }
        return redirect('/');
    }
}
