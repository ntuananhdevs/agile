@extends('layouts.admin')
@section('title', 'Thêm biến thể sản phẩm')

@section('content')

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Thêm biến thể sản phẩm</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.store_variants' , $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <div class="mb-3">
                        <label for="variant_sku" class="form-label fw-bold">Mã SKU:</label>
                        <input type="text" id="variant_sku" name="variant_sku"
                            class="form-control @error('variant_sku') is-invalid @enderror" placeholder="Nhập mã SKU biến thể"
                            value="{{ old('variant_sku') }}">
                        @error('variant_sku')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label fw-bold">Màu sắc:</label>
                        <input type="text" id="color" name="color"
                            class="form-control @error('color') is-invalid @enderror" placeholder="Nhập màu sắc"
                            value="{{ old('color') }}">
                        @error('color')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ram" class="form-label fw-bold">RAM (GB):</label>
                        <select id="ram" name="ram" class="form-select @error('ram') is-invalid @enderror">
                            <option value="" selected>Chọn dung lượng RAM</option>
                            <option value="16" {{ old('ram') == 16 ? 'selected' : '' }}>16 GB</option>
                            <option value="32" {{ old('ram') == 32 ? 'selected' : '' }}>32 GB</option>
                            <option value="64" {{ old('ram') == 64 ? 'selected' : '' }}>64 GB</option>
                        </select>
                        @error('ram')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="storage" class="form-label fw-bold">Bộ nhớ (GB):</label>
                        <select id="storage" name="storage" class="form-select @error('storage') is-invalid @enderror">
                            <option value="" selected>Chọn dung lượng bộ nhớ</option>
                            <option value="128" {{ old('storage') == 128 ? 'selected' : '' }}>128 GB</option>
                            <option value="256" {{ old('storage') == 256 ? 'selected' : '' }}>256 GB</option>
                            <option value="512" {{ old('storage') == 512 ? 'selected' : '' }}>512 GB</option>
                        </select>
                        @error('storage')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label fw-bold">Giá (VNĐ):</label>
                        <input type="number" id="price" name="price"
                            class="form-control @error('price') is-invalid @enderror" placeholder="Nhập giá bán"
                            value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label fw-bold">Số lượng tồn kho:</label>
                        <input type="number" id="stock" name="stock"
                            class="form-control @error('stock') is-invalid @enderror" placeholder="Nhập số lượng tồn kho"
                            value="{{ old('stock') }}">
                        @error('stock')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="image" class="form-label fw-bold">Hình ảnh:</label>
                        <input type="file" id="image" name="image"
                            class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Thêm biến thể</button>
                        {{-- <a href="{{ route('admin.products.product_variants', $product->id) }}" class="btn btn-secondary mt-2">Quay lại</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
