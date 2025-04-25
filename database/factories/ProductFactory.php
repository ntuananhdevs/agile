<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            11 => [
                'prefix' => 'iPhone',
                'models' => ['13', '13 Pro', '13 Pro Max', '14', '14 Plus', '14 Pro', '14 Pro Max', '15', '15 Plus', '15 Pro', '15 Pro Max']
            ],
            12 => [
                'prefix' => 'Samsung Galaxy',
                'models' => ['S23', 'S23+', 'S23 Ultra', 'Z Fold5', 'Z Flip5', 'A54', 'A34', 'S22', 'S22+', 'S22 Ultra']
            ],
            13 => [
                'prefix' => 'Xiaomi',
                'models' => ['Redmi Note 12', 'Redmi Note 12 Pro', 'Redmi Note 12 Pro+', '13T', '13T Pro', 'Poco F5', 'Poco F5 Pro', 'Poco X5 Pro']
            ],
            14 => [
                'prefix' => 'ROG Phone',
                'models' => ['7', '7 Ultimate', '6', '6 Pro', '5', '5 Pro', '5s', '5s Pro']
            ],
            15 => [
                'prefix' => 'Vivo',
                'models' => ['V27e', 'V25 Pro', 'V25', 'Y36', 'Y35', 'X90 Pro', 'X80 Pro', 'V29e']
            ]
        ];

        $category_id = $this->faker->randomElement(array_keys($categories));
        $category = $categories[$category_id];
        $model = $this->faker->randomElement($category['models']);
        $name = $category['prefix'] . ' ' . $model;
        
        $price = $this->faker->numberBetween(5000000, 40000000);
        
        // Generate a unique SKU for the product
        $categoryPrefix = substr(strtoupper(str_replace(' ', '', $category['prefix'])), 0, 3);
        $modelSuffix = strtoupper(str_replace(' ', '', $model));
        $randomString = strtoupper(Str::random(4));
        $sku = $categoryPrefix . '-' . $modelSuffix . '-' . $randomString;
        
        // Generate a unique slug by adding a random string
        $uniqueId = strtolower(Str::random(6));
        $slug = Str::slug($name) . '-' . $uniqueId;
        
        return [
            'sku' => $sku,
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->paragraph(),
            'price' => $price,
            'stock' => $this->faker->numberBetween(10, 100),
            'category_id' => $category_id,
            'image' => 'products/' . strtolower(str_replace(' ', '-', $name)) . '.jpg',
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
