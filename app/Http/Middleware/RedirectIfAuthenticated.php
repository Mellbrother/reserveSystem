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
      /*login後に/---/loginにアクセスされたときの処理*/
        if (Auth::guard('customer')->check()) {
            return redirect('/customer/home');
        }elseif(Auth::guard('clerk')->check()){
            return redirect('/clerk/home');
        }elseif(Auth::guard('admin')->check()){
            return redirect('/admin/home');
        }

        return $next($request);
    }
}
