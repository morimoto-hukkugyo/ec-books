<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        // 管理者でログイン済み　かつ　管理者ログイン画面へ遷移時、管理者ホーム画面へ遷移
        if (strpos(url()->current(), 'admin') !== false && Auth::guard($guard)->check()) {
            Log::debug('admin');
            return redirect()->guest(route('admin.home'));
        }

        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }


        return $next($request);
    }
}
