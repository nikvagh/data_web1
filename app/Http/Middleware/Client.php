<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Client
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
            return redirect()->route('agent');
        }

        if (Auth::user()->role == 4) {
           print_r(url()->previous());
           // exit();
            // if (url()->previous()) {
            // redirect(url()->previous());
            // }
            // else{
            // return $next($request);
            //  }

            return $next($request);

        }
        
    }
}
