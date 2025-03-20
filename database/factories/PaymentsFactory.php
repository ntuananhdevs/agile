<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payments>
 */
class PaymentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => null,
            'payment_method' => $this->faker->randomElement(['cash', 'credit_card', 'paypal']),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
        
        ];
    }
}
