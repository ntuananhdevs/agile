<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy tất cả sản phẩm
        $products = Product::all();
        
        // Tạo 3 biến thể cho mỗi sản phẩm
        foreach ($products as $product) {
            ProductVariant::factory()
                ->count(3)
                ->state(['product_id' => $product->id])
                ->create();
        }
    }
}