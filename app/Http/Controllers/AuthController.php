<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function showRegisterForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);

        return redirect()->route('login')->with('success', 'Đăng ký thành công');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'customer') {
                return redirect()->route('client.home');
            }
        }
    
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
    }
    

    public function logout(Request $request)
    {
        $user = Auth::user();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($user && $user->isRoleAdmin()) {
            return redirect()->route('login')->with('success', 'Đăng xuất thành công.');
        }

        return redirect()->route('client.home')->with('success', 'Đăng xuất thành công.');
    }
}

