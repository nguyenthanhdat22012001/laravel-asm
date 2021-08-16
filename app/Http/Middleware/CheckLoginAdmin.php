<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CheckLoginAdmin
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
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
        // elseif (Auth::check() && Auth::user()->role == 'agent') {
        //     return redirect('/agent');
        // }
        // else {
        //     return redirect('/customer');
        // }

        return redirect()->route('get.backend.login');
    }
}
