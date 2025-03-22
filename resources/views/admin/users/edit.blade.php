@extends('layouts.admin')

@section('title', 'Chỉnh sửa người dùng')

@section('content')

<h1 class="text-3xl font-bold underline mb-5">Chỉnh sửa người dùng</h1>

<!-- Form chỉnh sửa người dùng -->
<div class="card shadow-sm">
    <div class="card-header bg-warning text-white">
        <h5 class="mb-0"><i class="fas fa-user-edit"></i> Chỉnh sửa người dùng</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            

            <div class="row g-3">
                <!-- Tên -->
                <div class="col-md-6">
                    <label class="form-label">Tên</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email a-->
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Avatar -->
                <div class="col-md-6">
                    <label class="form-label">Ảnh đại diện</label>
                    <input type="file" name="avatar" class="form-control">
                    @error('avatar')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    @if ($user->avatar)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="rounded-circle" width="80" height="80">
                        </div>
                    @endif
                </div>

                <!-- Nút Lưu -->
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save"></i> Cập nhật
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
