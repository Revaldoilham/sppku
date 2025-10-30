<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Ceklevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if(Auth::check() && Auth::user()->level == 'admin') {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
