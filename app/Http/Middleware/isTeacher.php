<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class isTeacher
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
       if (Auth::check() && Auth::user()->role == 'teacher' && Auth::user()->isblock != 1) {
            return $next($request);
        }
        elseif (Auth::check()) {
            return back(); //redirect('/'.Auth::user()->role);  //route role/operation
        }
        else {
            return redirect('/login');
        }
    } 
}
