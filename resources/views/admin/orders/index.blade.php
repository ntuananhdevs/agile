@extends('layouts.admin')

@section('title', 'Danh sách đơn hàng')

@section('content')
   
<h1 class="text-3xl font-bold underline mb-5">Danh sách đơn hàng</h1>

<!-- Form tìm kiếm -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="fas fa-search"></i> Tìm kiếm đơn hàng</h5>
    </div>
    <div class="card-body">
        <form method="GET" action="{{ route('admin.orders.index') }}">
            <div class="row g-3">
                <!-- ID -->
                <div class="col-md-3">
                    <label class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" placeholder="Nhập ID" value="{{ request('id') }}">
                </div>

                <!-- Tên -->
                <div class="col-md-3">
                    <label class="form-label">Tên khách hàng</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên" value="{{ request('name') }}">
                </div>

                <!-- Trạng thái đơn hàng -->
                <div class="col-md-3">
                    <label class="form-label">Trạng thái đơn hàng</label>
                    <select name="shipping_status" class="form-select">
                        <option value="">Tất cả</option>
                        <option value="pending" {{ request('shipping_status') == 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                        <option value="in_transit" {{ request('shipping_status') == 'in_transit' ? 'selected' : '' }}>Đang giao hàng</option>
                        <option value="delivered" {{ request('shipping_status') == 'delivered' ? 'selected' : '' }}>Đã giao hàng</option>
                        <option value="cancelled" {{ request('shipping_status') == 'cancelled' ? 'selected' : '' }}>Đã hủy</option>
                        <option value="return_requested" {{ request('shipping_status') == 'return_requested' ? 'selected' : '' }}>Yêu cầu trả hàng</option>
                    </select>
                </div>

                <!-- Nút tìm kiếm & Làm mới -->
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="fas fa-search"></i> Tìm kiếm
                    </button>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
                        <i class="fas fa-sync"></i> Làm mới
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>SĐT</th>
                <th>Tổng tiền</th>
                <th>Hình Thức Thanh Toán</th>
                <th>Trạng thái thanh toán</th>
                <th>Trạng thái giao hàng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_name ?? $order->guest_fullname }}</td>
                    <td>{{ $order->guest_phone }}</td>
                    <td>{{ number_format($order->total_amount) }}đ</td>
                    <td>
                        @switch($order->payment_method)
                            @case('COD')
                                <span class="badge bg-primary">Thanh toán khi nhận hàng</span>
                                @break
                            @case('MOMO')
                                <span class="badge bg-danger">Thanh toán MoMo</span>
                                @break
                            @case('Momo')
                                <span class="badge bg-danger">Thanh toán MoMo</span>
                                @break
                            @case('Banking')
                                <span class="badge bg-info">Chuyển khoản ngân hàng</span>
                                @break
                            @case('ZaloPay')
                                <span class="badge bg-success">Thanh toán ZaloPay</span>
                                @break
                            @case('VNPay')
                                <span class="badge bg-warning">Thanh toán VNPay</span>
                                @break
                            @case('bank_transfer')
                                <span class="badge bg-info">Chuyển khoản ngân hàng</span>
                                @break
                            @default
                                <span class="badge bg-secondary">Không xác định</span>
                        @endswitch
                    </td>
                    <td>
                        @switch($order->payment_status)
                            @case('unpaid')
                                <span class="badge bg-warning">Chưa thanh toán</span>
                                @break
                            @case('paid')
                                <span class="badge bg-success">Đã thanh toán</span>
                                @break
                            @case('refunded')
                                <span class="badge bg-info">Đã hoàn tiền</span>
                                @break
                            @case('failed')
                                <span class="badge bg-danger">Thanh toán thất bại</span>
                                @break
                            @default
                                <span class="badge bg-secondary">Không xác định</span>
                        @endswitch
                    </td>
                    <td>
                        @switch($order->shipping_status)
                            @case('pending')
                                <span class="badge bg-warning">Chờ xử lý</span>
                                @break
                            @case('in_transit')
                                <span class="badge bg-primary">Đang giao hàng</span>
                                @break
                            @case('delivered')
                                <span class="badge bg-success">Đã giao hàng</span>
                                @break
                            @case('returned')
                                <span class="badge bg-info">Đã trả hàng</span>
                                @break
                            @case('cancelled')
                                <span class="badge bg-danger">Đã hủy</span>
                                @break
                            @case('return_requested')
                                <span class="badge bg-danger">Đã yêu cầu trả hàng</span>
                                @break
                            @case('return_in_process')
                                <span class="badge bg-info">Đang chờ trả hàng</span>
                                @break
                            @case('return_completed')
                                <span class="badge bg-secondary">Đã hoàn hàng</span>
                                @break
                            @case('return_failed')
                                <span class="badge bg-danger">Hoàn đơn thất bại</span>
                                @break
                            @default
                                <span class="badge bg-secondary">Không xác định</span>
                        @endswitch
                    </td>
                    <td>
                        @if($order->payment_status == 'paid' && $order->shipping_status == 'delivered')
                            <a href="{{ route('admin.orders.print', $order->id) }}" class="btn btn-success btn-sm">In</a>
                        @endif
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary btn-sm">Chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center mt-3">
            {{ $orders->links('pagination::bootstrap-4') }}
        </div>
@endsection