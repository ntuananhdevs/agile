@extends('layouts.auth')

@section('title', 'Đăng nhập')

@section('content')
    <h2>Đăng nhập</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                
                @foreach ($errors->all() as $error)
                    <li> {{$error}}</li>
               
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{route('login-post')}}">
        @csrf
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" >
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror


            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" >
                @error('password')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Đăng nhập</button>
            
            <div class="link">
                <a href="{{ route('register') }}">Chưa có tài khoản? Đăng ký</a>
            </div>
    </form>
@endsection