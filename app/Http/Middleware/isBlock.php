<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class isBlock
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
        if (Auth::check() && Auth::user()->isblock == 1) {
            return $next($request);
             # return redirect('/verfication/'.Auth::user()->id);
        }
        elseif (Auth::check()) {
            return back(); //redirect('/'.Auth::user()->role);  //route role/operation
        }
        else {
            return redirect('/login');
        }
    }
}
