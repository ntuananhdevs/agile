<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product_variants;
use Faker\Factory as Faker;

class Order_detailSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        Order::all()->each(function ($order) use ($faker) {
            $product_variants = Product_variants::inRandomOrder()->limit(3)->get();
            
            foreach ($product_variants as $variant) {
                Order_details::factory()->create([
                    'order_id' => $order->id,
                    'product_variant_id' => $variant->id,
                    'quantity' => $faker->numberBetween(1, 5),
                    'price' => $variant->price,
                ]);
            }
        });
    }
}