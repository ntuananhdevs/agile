<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // kiem tra neu khong dang nhap va khong phai la admin thi khong dc phep dang nhap
        if(!Auth::check() || !Auth::user()->isRoleAdmin()){
            return redirect()->route('login')->withErrors('ban k du quyen truy cap vap trang addmin');
        }
        return $next($request);
    }
}
