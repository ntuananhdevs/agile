@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-4">Biến thể của sản phẩm: {{ $product->name }}</h2>
   <a href="{{ route('admin.products.create_variants', $product->id) }}" class="btn btn-primary">Thêm biến thể</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Màu sắc</th>
                <th>RAM</th>
                <th>Bộ nhớ</th>
                <th>Giá</th>
                <th>Tồn kho</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productVariants as $variant)
                <tr>
                    <td>{{ $variant->id }}</td>
                    <td>{{ $variant->variant_sku }}</td>
                    <td>{{ $variant->color }}</td>
                    <td>{{ $variant->ram }} GB</td>
                    <td>{{ $variant->storage }} GB</td>
                    <td>{{ number_format($variant->price, 0, ',', '.') }} đ</td>
                    <td>{{ $variant->stock }}</td>
                    <td>
                        @if($variant->image)
                            <img src="{{ asset('storage/' . $variant->image) }}" alt="Ảnh sản phẩm" width="60">
                        @else
                            <span>Không có ảnh</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.products.edit_variant', $variant->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.products.delete_variant', $variant->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Quay lại danh sách sản phẩm</a>


</div>
@endsection
