<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product_variants;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_detail::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lấy một đơn hàng ngẫu nhiên
        $order = Order::inRandomOrder()->first();
        if (!$order) {
            // Nếu không có đơn hàng nào, tạo một đơn hàng mới
            $order = Order::factory()->create();
        }
        
        // Lấy một biến thể sản phẩm ngẫu nhiên
        $productVariant = Product_variants::inRandomOrder()->first();
        if (!$productVariant) {
            // Nếu không có biến thể sản phẩm nào, trả về lỗi
            throw new \Exception('Không có biến thể sản phẩm nào trong cơ sở dữ liệu');
        }
        
        // Số lượng sản phẩm
        $quantity = $this->faker->numberBetween(1, 5);
        
        // Tính tổng tiền chi tiết đơn hàng
        $subtotal = $productVariant->price * $quantity;
        
        return [
            'order_id' => $order->id,
            'product_variant_id' => $productVariant->id,
            'quantity' => $quantity,
            'subtotal' => $subtotal,
            'created_at' => $order->created_at,
            'updated_at' => $order->created_at,
        ];
    }
    
    /**
     * Cấu hình sau khi tạo chi tiết đơn hàng
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function configure()
    {
        return $this->afterCreating(function (Order_detail $orderDetail) {
            // Cập nhật tổng tiền đơn hàng
            $order = $orderDetail->order;
            $totalAmount = $order->order_details->sum('subtotal');
            $order->update(['total_amount' => $totalAmount]);
        });
    }
}