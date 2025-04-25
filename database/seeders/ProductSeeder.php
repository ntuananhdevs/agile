<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo 5 sản phẩm cho mỗi danh mục
        foreach ([11, 12, 13, 14, 15] as $categoryId) {
            Product::factory()
                ->count(5)
                ->state(['category_id' => $categoryId])
                ->create();
        }
    }
}
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
