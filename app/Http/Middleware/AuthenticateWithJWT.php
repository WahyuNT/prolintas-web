<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Closure;
use Illuminate\Support\Facades\Cookie;

class AuthenticateWithJWT
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken() ?? $request->cookie('token');

        if (!$token) {

            return redirect('/login');
        } elseif (JWTAuth::parseToken()->check() === false) {
            $cookie = Cookie::forget('token');
            return redirect('/login')->withCookie($cookie);
        }

        return $next($request);
    }
}
