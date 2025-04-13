@extends('layouts.auth')

@section('title', 'Đăng ký')

@section('content')
    <h2>Đăng ký tài khoản</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                
                @foreach ($errors->all() as $error)
                    <li> {{$error}}</li>
               
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('register-post') }}">
        @csrf
        
        <div class="form-group">
            <label for="name">Họ và tên</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Xác nhận mật khẩu</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit">Đăng ký</button>
        
        <div class="link">
            <a href="{{ route('login') }}">Đã có tài khoản? Đăng nhập</a>
        </div>
    </form>
@endsection