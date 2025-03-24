@extends('layouts.admin')

@section('title', 'Chi tiếtt người dùng')

@section('content')

    <h1 class="text-3xl font-bold underline mb-5">Chi tiết người dùng</h1>

    <style>
        .table td, .table th {
            vertical-align: middle;
        }
    </style>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    {{-- <tr>
                        <th>ID</th>
                        <td>{{ $user->id }}</td>
                    </tr> --}}
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="img-circle" width="80">
                        </td>
                    </tr>
                    <tr>
                        <th>Tên</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Email xác thực</th>
                        <td>{{ $user->email_verified_at ? 'Đã xác thực' : 'Chưa xác thực' }}</td>
                    </tr>
                    {{-- <tr>
                        <th>Mật khẩu</th>
                        <td>{{ Str::limit($user->password, 10, '...') }}</td>
                    </tr> --}}
                    <tr>
                        <th>Remember Token</th>
                        <td>{{ $user->remember_token }}</td>
                    </tr>
                    <tr>
                        <th>Ngày tạo</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Ngày cập nhật</th>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Quay lại</a>
            
        </div>
    </div>

@endsection
