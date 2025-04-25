<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Order_details;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo 50 đơn hàng
        Order::factory(50)->create()->each(function ($order) {
            // Mỗi đơn hàng có 1-5 sản phẩm
            $itemCount = rand(1, 5);
            Order_details::factory($itemCount)->create([
                'order_id' => $order->id,
            ]);
            
            // Cập nhật tổng tiền đơn hàng
            $totalAmount = $order->order_details->sum('subtotal');
            $order->update(['total_amount' => $totalAmount]);
        });
    }
}