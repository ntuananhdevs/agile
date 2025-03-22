@extends('layouts.admin')

@section('title', 'Danh sách người dùng')

@section('content')

<h1 class="text-3xl font-bold underline mb-5">Danh sách người dùng</h1>

<a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-4">
    Thêm người dùng
</a>

<!-- Form tìm kiếm -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm người dùng</h5>
    </div>
    <div class="card-body">
        <form method="GET" action="{{ route('admin.users.index') }}">
            <div class="row g-3">
                <!-- ID -->
                <div class="col-md-3">
                    <label class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" placeholder="Nhập ID" value="{{ request('id') }}">
                </div>

                <!-- Tên -->
                <div class="col-md-3">
                    <label class="form-label">Tên</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên" value="{{ request('name') }}">
                </div>

                <!-- Email -->
                <div class="col-md-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email" value="{{ request('email') }}">
                </div>

                <!-- Nút tìm kiếm & Làm mới -->
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="fas fa-search"></i> Tìm kiếm
                    </button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-sync"></i> Làm mới
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Bảng danh sách người dùng -->
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                
                <th scope="col">Avatar</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Ngày cập nhật</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                
                <td>
                   
                    <img src="{{ asset($user->avatar) }}" alt="Avatar">


                    
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-sm">Xem</a>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Hiển thị phân tranga -->
    <div class="d-flex justify-content-center mt-3">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
