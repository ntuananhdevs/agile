<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Payments;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::all()->each(function ($order) {
            Payments::factory()->create([
                'order_id' => $order->id,
            ]);
        });
    }
}
