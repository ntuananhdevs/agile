@extends('layouts.admin')

@section('title', 'Chỉnh sửa danh mục')

@section('content')
    <h1 class="mb-4">Chỉnh sửa danh mục</h1>

    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0"><i class="fas fa-edit"></i> Chỉnh sửa danh mục</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('POST')

                <!-- Tên danh mục -->
                <div class="mb-3">
                    <label class="form-label">Tên danh mục <span class="text-danger">*</span></label>
                    <input type="text" name="ten_danh_muc"
                        class="form-control @error('ten_danh_muc') is-invalid @enderror"
                        value="{{ old('ten_danh_muc', $category->ten_danh_muc) }}" required>
                    @error('ten_danh_muc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Trạng thái -->
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="trang_thai" class="form-control">
                        <option value="1" {{ $category->trang_thai == 1 ? 'selected' : '' }}>Hoạt động</option>
                        <option value="0" {{ $category->trang_thai == 0 ? 'selected' : '' }}>Ẩn</option>
                    </select>
                </div>

                <!-- Nút bấm -->
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Cập nhật</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                    Quay lại</a>
            </form>
        </div>
    </div>
@endsection
