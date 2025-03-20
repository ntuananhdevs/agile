@extends('layouts.admin')

@section('title', 'Danh sách sản phẩm')

@section('content')

    <h1 class="text-3xl font-bold underline mb-5">Danh sách sản phẩm</h1>

    <a href="/admin/products/create" class="btn btn-primary mb-4">
        Thêm sản phẩm
    </a>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>

                    <th scope="col">Danh mục sản phẩm </th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Ngày nhập kho</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày cập nhật</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->ma_san_pham }}</td>
                    <td>{{ $product->ten_san_pham }}</td>
                    <td>{{ $product->ten_danh_muc }}</td>
                    <td>{{ number_format($product->gia_san_pham, 0, ',', '.') }} VND</td>
                    <td>{{ $product->so_luong }}</td>
                    <td>{{ $product->ngay_nhap_kho }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $product->img) }}" alt="Hình ảnh" width="100px">
                    </td>
                    <td>
                      <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info btn-sm">Show</a>
                    
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>

@endsection
