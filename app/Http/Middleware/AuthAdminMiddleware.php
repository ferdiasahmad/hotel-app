<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::guard('admin')->check()){
                return $next($request);
            }
            return redirect('/admin/login');
        }
        else{
            if(Auth::guard('admin')->check()){
                return $next($request);
            }
            return redirect('/admin/login');
        }

        return redirect('/admin/login');
    }
}
