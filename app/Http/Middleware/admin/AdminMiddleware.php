<?php

namespace App\Http\Middleware\admin;
use Auth;
use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        
        if (Auth::check() && Auth::user()->is_admin == 1)
        {
            return $next($request);
        } else {
            return redirect()->route('home');
        }
    }

}
