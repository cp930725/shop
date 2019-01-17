<?php

namespace App\Http\Middleware;

use Closure;

class HomeUser
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
        if (session('userFlag')) {
            return $next($request);
        } else {
            return redirect('/login')->with('error', '请登录');
        }
    }
}
