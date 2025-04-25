<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ReturnRequest;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Hiển thị danh sách đơn hàng
     */
    public function index(Request $request)
    {
        $query = Order::query();

        // Lọc theo ID
        if ($request->has('id') && !empty($request->id)) {
            $query->where('id', $request->id);
        }

        // Lọc theo tên khách hàng
        if ($request->has('name') && !empty($request->name)) {
            $query->where(function($q) use ($request) {
                $q->where('user_name', 'like', '%' . $request->name . '%')
                  ->orWhere('guest_fullname', 'like', '%' . $request->name . '%');
            });
        }

        // Lọc theo trạng thái vận chuyển
        if ($request->has('shipping_status') && !empty($request->shipping_status)) {
            $query->where('shipping_status', $request->shipping_status);
        }

        $orders = $query->orderBy('id', 'desc')->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Hiển thị chi tiết đơn hàng
     */
    public function show($id)
    {
        $order = Order::findOrFail($id)->toArray();
        $order_details = OrderDetail::where('order_id', $id)->get()->toArray();

        return view('admin.orders.order-details', compact('order', 'order_details'));
    }

    /**
     * Cập nhật trạng thái đơn hàng
     */
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->shipping_status = $request->shipping_status;
        $order->save();

        return redirect()->back()->with('success', 'Cập nhật trạng thái đơn hàng thành công!');
    }

    /**
     * Xử lý yêu cầu trả hàng
     */
    public function handleReturn(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $returnRequest = ReturnRequest::findOrFail($request->return_id);
        
        // Cập nhật trạng thái đơn hàng
        $order->shipping_status = $request->action;
        $order->save();
        
        // Cập nhật thông tin yêu cầu trả hàng
        $returnRequest->status = $request->action;
        $returnRequest->admin_note = $request->admin_reason;
        $returnRequest->return_updated_at = now();
        $returnRequest->save();

        return redirect()->back()->with('success', 'Đã xử lý yêu cầu trả hàng!');
    }

    /**
     * In hóa đơn
     */
    public function printBill($id)
    {
        $order = Order::findOrFail($id);
        $order_details = OrderDetail::where('order_id', $id)->get();

        return view('admin.orders.print-bill', compact('order', 'order_details'));
    }
}