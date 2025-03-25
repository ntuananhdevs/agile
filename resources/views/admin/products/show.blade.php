@extends('layouts.admin')

@section('title', 'Chi tiết sản phẩm')

@section('content')

    <h1 class="text-3xl font-bold underline mb-5">Chi tiết sản phẩm</h1>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Danh mục sản phẩm </th>
                    <th scope="col">Mô tả </th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->description }}</td>
                   <td>
                     <a href="{{ route('admin.products.productVariants', $product->id) }}" class="btn btn-warning">Xem chi tiết </a>
                   </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

