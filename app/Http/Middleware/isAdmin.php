<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if (Auth::check()) {
            if (auth()->user()->is_admin == 1) {
            
                // dd('hi auth is admin');
                return $next($request);
            } else {
                // dd('auth 0');
                return to_route('user.home');
            }
        }
    }
}
