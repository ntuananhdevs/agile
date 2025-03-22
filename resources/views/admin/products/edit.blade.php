@extends('layouts.admin')
@section('title', 'Chỉnh sửa sản phẩm')

@section('content')

<form action="{{ route('admin.products.update', $product->id) }}" method="POST" class="container mt-4 p-4 border rounded shadow-sm bg-light">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" >
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label fw-bold">Danh mục:</label>
        <select id="category_id" name="category_id" class="form-select @error('category_id') is-invalid @enderror" >
            <option value="">Chọn danh mục</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label fw-bold">Mô tả:</label>
        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" >{{ old('description', $product->description) }}</textarea>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>


    <button type="submit" class="btn btn-success w-100">Cập nhật sản phẩm</button>
</form>


@endsection
