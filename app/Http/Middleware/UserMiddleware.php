<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu không đăng nhập hoặc không phải là user
        if (!Auth::check() || !Auth::user()->isUser()) {
            return redirect()->route('login')->with('error', 'Bạn không có quyền truy cập vào khu vực này. Chỉ dành cho người dùng thông thường.');
        }

        return $next($request);
    }
}