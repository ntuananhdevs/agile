<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\OrderDetail;
use App\Models\Product_variants;
use App\Models\ProductVariant;

class OrderDetailsSeeder extends Seeder
{
    public function run()
    {
        Order::factory()->count(5)->create()->each(function ($order) {
            Order_details::factory()->count(5)->create([
                'order_id' => $order->id,
            
            ])->each(function ($order_details) {
                Product_variants::factory()->count(5)->create([
                    'product_variants' => $order_details->id,
                ]);
            });
        });
    }
}