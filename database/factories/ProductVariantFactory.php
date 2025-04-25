<?php

namespace Database\Factories;


use App\Models\Product_variants;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductVariantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product_variants::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lấy một sản phẩm ngẫu nhiên
        $product = Product::inRandomOrder()->first();
        if (!$product) {
            // Nếu không có sản phẩm nào, tạo một sản phẩm mới
            $product = Product::factory()->create();
        }
        
        // Xác định màu sắc, RAM và bộ nhớ
        $colors = ['Đen', 'Trắng', 'Xanh dương', 'Xanh lá', 'Đỏ', 'Vàng', 'Tím', 'Hồng', 'Bạc', 'Xám'];
        $rams = ['4GB', '6GB', '8GB', '12GB', '16GB'];
        $storages = ['64GB', '128GB', '256GB', '512GB', '1TB'];
        
        $color = $this->faker->randomElement($colors);
        $ram = $this->faker->randomElement($rams);
        $storage = $this->faker->randomElement($storages);
        
        // Tính giá biến thể dựa trên RAM và bộ nhớ
        $ramPrice = [
            '4GB' => 0,
            '6GB' => 500000,
            '8GB' => 1000000,
            '12GB' => 2000000,
            '16GB' => 3000000
        ];
        
        $storagePrice = [
            '64GB' => 0,
            '128GB' => 1000000,
            '256GB' => 2000000,
            '512GB' => 4000000,
            '1TB' => 8000000
        ];
        
        $basePrice = $product->price;
        $additionalPrice = $ramPrice[$ram] + $storagePrice[$storage];
        $price = $basePrice + $additionalPrice;
        
        // Tạo slug cho biến thể
        $slug = Str::slug($product->name . '-' . $color . '-' . $ram . '-' . $storage);
        
        // Tạo variant_sku duy nhất - Sử dụng mã màu ASCII
        $productSku = $product->sku ?? 'PROD';
        
        // Chuyển đổi tên màu sang mã màu ASCII
        $colorMapping = [
            'Đen' => 'BLK',
            'Trắng' => 'WHT',
            'Xanh dương' => 'BLU',
            'Xanh lá' => 'GRN',
            'Đỏ' => 'RED',
            'Vàng' => 'YLW',
            'Tím' => 'PRP',
            'Hồng' => 'PNK',
            'Bạc' => 'SLV',
            'Xám' => 'GRY'
        ];
        
        $colorCode = $colorMapping[$color] ?? 'COL';
        $ramCode = str_replace(['GB', ' '], '', $ram);
        $storageCode = str_replace(['GB', 'TB', ' '], '', $storage);
        if (strpos($storage, 'TB') !== false) {
            $storageCode .= 'T';
        } else {
            $storageCode .= 'G';
        }
        $randomString = strtoupper(Str::random(3));
        $variant_sku = $productSku . '-' . $colorCode . $ramCode . $storageCode . '-' . $randomString;
        
        return [
            'product_id' => $product->id,
            'variant_sku' => $variant_sku,
            'color' => $color,
            'ram' => $ram,
            'storage' => $storage,
            'price' => $price,
            'stock' => $this->faker->numberBetween(5, 50),
            'image' => 'variants/' . $slug . '.jpg',
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}