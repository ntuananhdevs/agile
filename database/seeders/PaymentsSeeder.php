<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Payments;
use App\Models\User;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create()->each(function ($user) {
            Order::factory()->count(5)->create([
                'user_id' => $user->id,
            ])->each(function ($order) {
                Payments::factory()->count(5)->create([
                    'order_id' => $order->id,
                ]);
            });
        });
}
}
