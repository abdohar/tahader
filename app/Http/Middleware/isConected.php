<?php

namespace App\Http\Middleware;

use Closure;

class isConected
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
        $connected = @fsockopen("www.google.com", 80);
        if ($connected){
        return $next($request);
        // fclose($connected);
        }else{
        return redirect('/no-internet');
        }
    }
}
