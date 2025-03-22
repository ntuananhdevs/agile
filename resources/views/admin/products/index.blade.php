@extends('layouts.admin')

@section('title', 'Danh sách sản phẩm')

@section('content')

    <h1 class="text-3xl font-bold underline mb-5">Danh sách sản phẩm</h1>
<!-- Form tìm kiếm -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm sản phẩm</h5>
    </div>
    <div class="card-body">
        <form method="GET" action="{{ route('admin.products.index') }}">
            <div class="row g-3 align-items-center">
                <!-- Mã sản phẩm -->
                <div class="col-auto">
                    <label class="form-label">Tên sản phẩm</label>
                </div>
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm"
                        value="{{ request('name') }}">
                </div>
                <!-- Danh mục -->
                <div class="col-auto">
                    <label class="form-label">Danh mục</label>
                </div>
                <div class="col">
                    <select name="category_id" class="form-select">
                        <option value="">Tất cả</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- Nút tìm kiếm & Làm mới -->
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100 me-1">
                        <i class="fas fa-search"></i> Tìm kiếm
                    </button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary w-100 ms-1">
                        <i class="fas fa-sync"></i> Làm mới
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-4">
        Thêm sản phẩm
    </a>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Danh mục sản phẩm </th>
                    <th scope="col">Mô tả </th>
                    <th scope="col">Thao tác</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->description }}</td>
                   <td>
                    <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary btn-sm">Show</a>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                   </td>
                     
                    
                    
                  
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-center mt-3">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>

@endsection
