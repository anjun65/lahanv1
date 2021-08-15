<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Support\Facades\Auth;

class IsVP
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
        if(Auth::user() && auth::user()->roles == 'VP')
        {
            return $next($request);
        }

        return redirect('/');
    }
}
