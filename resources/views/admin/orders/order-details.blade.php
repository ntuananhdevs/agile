@extends('layouts.admin')

@section('title', 'Chi tiết đơn hàng #' . $order['id'])

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mã đơn hàng #{{ $order['id'] }}</h6>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5>Thông tin khách hàng</h5>
                    <p><strong>Họ tên:</strong> {{ $order['user_name'] ?? $order['guest_fullname'] }}</p>
                    <p><strong>Email:</strong> {{ $order['email'] ?? $order['guest_email'] }}</p>
                    <p><strong>Số điện thoại:</strong> {{ $order['phone_number'] ?? $order['guest_phone'] }}</p>

                    <p><strong>Địa chỉ:</strong> {{ $order['shipping_address'] }}</p>
                </div>
                <div class="col-md-6">
                    <h5>Thông tin đơn hàng</h5>
                    <p><strong>Ngày đặt:</strong> {{ date('d/m/Y', strtotime($order['order_date'])) }}</p>
                    <p><strong>Trạng thái thanh toán:</strong>
                        @switch($order['payment_status'])
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
                                <span class="badge bg-secondary">Chưa có thông tin</span>
                        @endswitch
                    </p>
                    <p><strong>Trạng thái vận chuyển:</strong>
                        @switch($order['shipping_status'])
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
                                <span class="badge bg-secondary">Trả hàng thành công</span>
                                @break
                            @case('return_failed')
                                <span class="badge bg-danger">Trả hàng thất bại</span>
                                @break
                            @case('reject')
                                <span class="badge bg-danger">Đã từ chối trả hàng</span>
                                @break
                            @default
                                <span class="badge bg-secondary">Chưa có thông tin</span>
                        @endswitch
                    </p>
                    <p><strong>Phương thức thanh toán:</strong> 
                        @switch($order['payment_method'])
                            @case('COD')
                                <span class="badge bg-primary">Thanh toán khi nhận hàng</span>
                                @break
                            @case('MOMO')
                                <span class="badge bg-danger">Thanh toán MoMo</span>
                                @break
                            @case('bank_transfer')
                                <span class="badge bg-info">Chuyển khoản ngân hàng</span>
                                @break
                            @default
                                <span class="badge bg-secondary">{{ $order['payment_method'] ?? 'Chưa có thông tin' }}</span>
                        @endswitch
                    </p>
                </div>
            </div>
            <div class="shipping_status mb-3">
                <strong>Trạng thái vận chuyển:</strong>
                @php
                $allowedTransitions = [
                    'pending' => ['in_transit', 'cancelled'],
                    'in_transit' => ['delivered', 'cancelled'],
                    'delivered' => [],
                    'cancelled' => [],
                    'return_requested' => [],
                    'return_in_process' => ['return_completed', 'return_failed'],
                    'return_completed' => [],
                    'return_failed' => [],
                ];

                $statusLabels = [
                    'pending' => 'Chờ xử lý',
                    'in_transit' => 'Đang giao hàng',
                    'delivered' => 'Đã giao hàng',
                    'cancelled' => 'Đã hủy',
                    'return_requested' => 'Yêu cầu trả hàng',
                    'return_in_process' => 'Đang chờ trả hàng',
                    'return_completed' => 'Trả hàng thành công',
                    'return_failed' => 'Trả hàng thất bại',
                ];

                $currentStatus = $order['shipping_status'];
                @endphp
                <form method="POST" action="{{ route('admin.orders.update_status', $order['id']) }}" class="d-flex gap-3 align-items-center">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order['id'] }}">
                    <select name="shipping_status" class="form-select" aria-label="Chọn trạng thái vận chuyển" style="width: 250px; height: 40px;">
                        @foreach ($statusLabels as $status => $label)
                            @php
                                $disabled = !in_array($status, $allowedTransitions[$currentStatus]) && $status !== $currentStatus;
                            @endphp
                            <option value="{{ $status }}"
                                {{ $currentStatus === $status ? 'selected' : '' }}
                                {{ $disabled ? 'disabled' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @if ($currentStatus !== 'return_requested' && $currentStatus !== 'return_completed')
                        <button type="submit" class="btn {{ in_array($currentStatus, ['return_in_process', 'return_completed', 'return_failed']) ? 'btn-warning' : 'btn-primary' }}" style="margin-top: 14px;">
                            {{ in_array($currentStatus, ['return_in_process', 'return_completed', 'return_failed']) ? 'Xử lý yêu cầu trả hàng' : 'Cập nhật trạng thái' }}
                        </button>
                    @endif
                </form>
            </div>

            <!-- Bỏ toàn bộ phần liên quan đến trường "reason" -->

            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Cấu hình</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Giảm giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $grand_total = 0;
                        @endphp
                        @foreach ($order_details as $item)
                            @php
                            $price = $item['price'] ?? 0;
                            $quantity = $item['quantity'] ?? 0;
                            $discount_value = $item['discount_value'] ?? 0;
                            $discount_type = $item['discount_type'] ?? '';

                            if ($discount_type == 'percentage') {
                                $discount = $price * $discount_value / 100;
                            } else {
                                $discount = $discount_value;
                            }
                            $subtotal = ($price * $quantity) - $discount;
                            $grand_total += $subtotal;
                            @endphp
                            <tr>
                                <td>{{ $item['product_variant']['product']['name'] ?? $item['product_name'] ?? 'Không có tên sản phẩm' }}</td>
                                <td>
                                    <img src="{{ $item['img'] ?? '' }}" alt="Product Image" style="width:70px;height:auto;">
                                </td>
                                <td>
                                    @if (!empty($item['color']))Màu: {{ $item['color'] }}<br>@endif
                                    @if (!empty($item['ram']))RAM: {{ $item['ram'] }}<br>@endif
                                    @if (!empty($item['storage']))Bộ nhớ: {{ $item['storage'] }}@endif
                                </td>
                                <td>{{ number_format($quantity) }}</td>
                                <td>{{ number_format($price) }}đ</td>
                                <td>
                                    @if ($discount_type == 'percentage')
                                        {{ $discount_value }}%
                                    @else
                                        {{ number_format($discount_value) }}đ
                                    @endif
                                </td>
                                <td>{{ number_format($subtotal) }}đ</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="6" class="text-right"><strong>Tổng tiền </strong>(đã bao gồm VAT 10%):</td>
                            <td><strong>{{ number_format($grand_total * 1.10) }}đ</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-right mt-3">
                <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Quay lại</a>
                @if($order['payment_status'] == 'paid' && $order['shipping_status'] == 'delivered')
                    <a href="{{ route('admin.orders.print', $order['id']) }}" class="btn btn-success">In hóa đơn</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection