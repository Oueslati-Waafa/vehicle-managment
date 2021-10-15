<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
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
        if (Auth::check() && Auth::user()->isban) {

            # code...
            $banned = Auth::user()->isban == "1";
            Auth::logout();

            if($banned == 1)
            {
                $message = "Your Account has been Banned. Please contact the administrator.";
            }

            return redirect()->route('login')
            ->with('isban',$message)
            ->withErrors(['email' => 'Your account has been Banned. Please contact administrator.']);
        }
        return $next($request);
    }
}
