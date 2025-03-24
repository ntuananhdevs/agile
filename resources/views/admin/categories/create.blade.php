@extends('layouts.admin')

@section('title', 'Thêm danh mục')

@section('content')
    <h1 class="mb-4">Thêm danh mục mới</h1>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-plus"></i> Thêm danh mục</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <!-- Tên danh mục -->
                <div class="mb-3">
                    <label class="form-label">Tên danh mục <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Nhập tên danh mục" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Mô tả danh mục -->
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                        placeholder="Nhập mô tả danh mục">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Trạng thái -->
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="status" class="form-control">
                        <option value="1" selected>Hoạt động</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>

                <!-- Nút bấm -->
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu danh mục</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                    Quay lại</a>
            </form>
        </div>
    </div>
@endsection
