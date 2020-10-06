<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use URL;

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
        // echo URL::previous();
        // echo request()->segment(1);
        // echo "<pre>";
        // print_r($request->all());
        // exit;

        // return $next($request);
        if (!Auth::check()) {
            if(request()->segment(1) == 'product_details'){
                return redirect('login/customer/front');
            }else{        
                return redirect()->route('login');
            }
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
            return $next($request);
        }
    }
}
