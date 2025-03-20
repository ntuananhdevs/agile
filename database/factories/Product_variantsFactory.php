<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_variants>
 */
class Product_variantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => null,
            'color' => $this->faker->colorName(),
            'ram' => $this->faker->randomElement(['2GB', '4GB', '8GB', '16GB']),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'storage' => $this->faker->randomElement(['32GB', '64GB', '128GB', '256GB']),
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}
