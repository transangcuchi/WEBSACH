<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
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
        if(Auth::check()){
            if(Auth::user()->role_id == 1){
                return $next($request);
            }
            return redirect()->route('adminlogin')->with('Error','Không có quyền truy cập!');
        }
        return redirect()->route('adminlogin')->with('Error','Không có quyền truy cập!');
    }
}
