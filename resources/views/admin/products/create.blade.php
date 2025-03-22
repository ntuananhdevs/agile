@extends('layouts.admin')
@section('title', 'Thêm sản phẩm')

@section('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Thêm sản phẩm</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label fw-bold">Danh mục:</label>
                    <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                        <option value="">Chọn danh mục</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="description" class="form-label fw-bold">Mô tả:</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Nhập mô tả sản phẩm">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
