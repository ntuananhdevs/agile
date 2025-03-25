@extends('layouts.admin')
@section('title', 'Thêm sản phẩm')

@section('content')

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Thêm sản phẩm</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
                        <input type="text" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên sản phẩm"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sku" class="form-label fw-bold">SKU:</label>
                        <input type="text" id="sku" name="sku"
                            class="form-control @error('sku') is-invalid @enderror" placeholder="Nhập mã sản phẩm " value="{{ old('sku') }}">
                        @error('sku')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label fw-bold">Danh mục:</label>
                        <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                            <option value="">Chọn danh mục</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Hình ảnh:</label>
                        <input type="file" id="image" name="image"
                            class="form-control @error('image') is-invalid @enderror" >
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="description" class="form-label fw-bold">Mô tả:</label>
                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                            rows="3" placeholder="Nhập mô tả sản phẩm">{{ old('description') }}</textarea>
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

    