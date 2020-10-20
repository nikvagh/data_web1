<?php
namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class Admin
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

        // if (Auth::user()->role == 5) {
        //     return redirect()->route('academy');
        // }

        // if (Auth::user()->role == 6) {
        //     return redirect()->route('scout');
        // }

        if (Auth::user()->role == 2) {
            return $next($request);
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('agent');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('customer');
        }

        // else{
        //     return redirect()->route('login');
        // }
    }

}
