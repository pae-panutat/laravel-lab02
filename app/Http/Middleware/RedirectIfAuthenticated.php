<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd($request);
        if($request->remember===null){
            setcookie('login_username',$request->username,100);
            setcookie('login_pass',$request->password,100);
         }
         else{
            setcookie('login_username',$request->username,time()+60*60*24*100);
            setcookie('login_pass',$request->password,time()+60*60*24*100);
         }
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
