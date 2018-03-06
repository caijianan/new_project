<?php

namespace App\Http\Middleware;

use Closure;

class homeLogin
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
        if(session('userinfo')){
            return $next($request);
        }else{
            return redirect('home/login')->with('error','请登陆');
        }
        
    }
}
