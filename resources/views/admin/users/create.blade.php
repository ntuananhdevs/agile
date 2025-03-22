@extends('layouts.admin')

@section('title', 'Thêm người dùng')

@section('content')

<h1 class="text-3xl font-bold underline mb-5">Thêm người dùng</h1>

<!-- Form thêm người dùng -->
<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0"><i class="fas fa-user-plus"></i> Thêm người dùng</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
                <!-- Tên -->
                <div class="col-md-6">
                    <label class="form-label">Tên</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                        placeholder="Nhập tên" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Nhập email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Mật khẩu -->
                <div class="col-md-6">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                        placeholder="Nhập mật khẩu">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Avatara -->
                <div class="col-md-6">
                    <label class="form-label">Avatar</label>
                    <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror" accept="image/*">
                    @error('avatar')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Nút Lưu -->
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Thêm
                    </button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
