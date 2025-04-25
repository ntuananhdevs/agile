<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            // CategorySeeder::class, // Bỏ comment nếu bạn cần tạo danh mục
            ProductSeeder::class,
            ProductVariantSeeder::class,
            OrderSeeder::class,
            // Order_detailSeeder::class,
            // PaymentsSeeder::class,
        ]);
    }
}
