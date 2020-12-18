<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Mod\ModControllers;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckBanned
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
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (auth()->check() && auth()->user()->banned_until && now()->lessThan(auth()->user()->banned_until)) {
                $banned_days = now()->diffInDays(auth()->user()->banned_until);
                auth()->logout();

                if ($banned_days > 14) {
                    $message = 'Your account has been suspended. Please contact administrator.';
                } else {
                    $message = 'Your account has been suspended for '.$banned_days.' '.str_plural('day', $banned_days).'. Please contact administrator.';
                }

                return redirect()->route('login')->withMessage($message);
            }

            return $next($request);
        }

    }

}
