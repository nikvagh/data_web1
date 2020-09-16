<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Agent
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
        // echo "agent middleware";
        // exit;

        // return $next($request);
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // if (Auth::user()->role == 1) {
        //     return redirect()->route('superadmin');
        // }

        if (Auth::user()->role == 2) {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 3) {
            return $next($request);
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('client');
        }
    }
}