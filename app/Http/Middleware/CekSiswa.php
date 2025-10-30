<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CekSiswa
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
        if(Auth::check() && Auth::user()->level == 'siswa') {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
