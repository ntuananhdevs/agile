<?php

namespace Database\Factories;

use App\Models\Order_details;
use App\Models\Product_variants;
use Illuminate\Database\Eloquent\Factories\Factory;

class Order_detailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_details::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lấy ngẫu nhiên một biến thể sản phẩm
        $productVariant = Product_variants::inRandomOrder()->first();
        
        // Số lượng sản phẩm từ 1-5
        $quantity = $this->faker->numberBetween(1, 5);
        
        // Giá sản phẩm
        $price = $productVariant ? $productVariant->price : $this->faker->numberBetween(50000, 2000000);
        
        // Tính subtotal
        $subtotal = $price * $quantity;
        
        return [
            'product_variant_id' => $productVariant ? $productVariant->id : null,
            'quantity' => $quantity,
            'price' => $price,
            'subtotal' => $subtotal,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

namespace Database\Factories;

use App\Models\Order_details;
use App\Models\Product_variants;
use Illuminate\Database\Eloquent\Factories\Factory;

class Order_detailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_details::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lấy ngẫu nhiên một biến thể sản phẩm
        $productVariant = Product_variants::inRandomOrder()->first();
        
        // Số lượng sản phẩm từ 1-5
        $quantity = $this->faker->numberBetween(1, 5);
        
        // Giá sản phẩm
        $price = $productVariant ? $productVariant->price : $this->faker->numberBetween(50000, 2000000);
        
        // Tính subtotal
        $subtotal = $price * $quantity;
        
        return [
            'product_variant_id' => $productVariant ? $productVariant->id : null,
            'quantity' => $quantity,
            'price' => $price,
            'subtotal' => $subtotal,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
