<?php

namespace App\Http\Middleware\admin;

use Closure;

class TuitorMiddleware
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
        if(auth()->user()->role->id == 2){
            return $next($request);
        }
   
        return redirect('front.pages.index')->with('error',"Only teacher can access!");
    }
}
