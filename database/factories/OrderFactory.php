<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use App\Models\Product_variants;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Danh sách họ phổ biến ở Việt Nam
        $lastNames = [
            'Nguyễn', 'Trần', 'Lê', 'Phạm', 'Hoàng', 'Huỳnh', 'Phan', 'Vũ', 'Võ', 'Đặng',
            'Bùi', 'Đỗ', 'Hồ', 'Ngô', 'Dương', 'Lý', 'Đào', 'Đinh', 'Mai', 'Trịnh'
        ];
        
        // Danh sách tên đệm phổ biến ở Việt Nam
        $middleNames = [
            'Văn', 'Thị', 'Hữu', 'Đức', 'Công', 'Quang', 'Minh', 'Hoài', 'Thanh', 'Ngọc',
            'Đình', 'Xuân', 'Hồng', 'Thái', 'Bá', 'Mạnh', 'Tuấn', 'Anh', 'Thu', 'Kim'
        ];
        
        // Danh sách tên phổ biến ở Việt Nam
        $firstNames = [
            'Nam', 'Hùng', 'Dũng', 'Thắng', 'Cường', 'Tùng', 'Quân', 'Hải', 'Long', 'Trung',
            'Hương', 'Lan', 'Phương', 'Thảo', 'Hà', 'Mai', 'Linh', 'Trang', 'Hoa', 'Hiền',
            'Minh', 'Tuấn', 'Anh', 'Huy', 'Khoa', 'Đạt', 'Nhung', 'Yến', 'Nga', 'Dung'
        ];
        
        // Tạo tên đầy đủ người Việt Nam
        $lastName = $this->faker->randomElement($lastNames);
        $middleName = $this->faker->randomElement($middleNames);
        $firstName = $this->faker->randomElement($firstNames);
        $fullName = $lastName . ' ' . $middleName . ' ' . $firstName;
        
        // Tạo email từ tên
        $emailName = Str::slug($firstName . $middleName . $lastName, '');
        $email = $emailName . $this->faker->numberBetween(1, 999) . '@' . $this->faker->randomElement(['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com']);
        
        // Tạo số điện thoại Việt Nam
        $phonePrefix = $this->faker->randomElement(['032', '033', '034', '035', '036', '037', '038', '039', '070', '076', '077', '078', '079', '081', '082', '083', '084', '085', '086', '088', '089', '090', '091', '092', '093', '094', '096', '097', '098', '099']);
        $phoneNumber = $phonePrefix . $this->faker->numberBetween(1000000, 9999999);
        
        // Tạo mã đơn hàng
        $orderCode = 'ORD-' . strtoupper(Str::random(8));
        
        // Lấy ngẫu nhiên một user hoặc null (đơn hàng khách)
        $user = $this->faker->boolean(70) ? User::inRandomOrder()->first() : null;
        
        // Lấy ngẫu nhiên phương thức thanh toán
        $paymentMethod = $this->faker->randomElement(['COD', 'Banking', 'Momo', 'ZaloPay', 'VNPay']);
        
        // Lấy ngẫu nhiên trạng thái thanh toán
        $paymentStatus = $this->faker->randomElement(['unpaid', 'paid', 'refunded', 'failed']);
        
        // Lấy ngẫu nhiên trạng thái vận chuyển
        $shippingStatus = $this->faker->randomElement(['pending', 'in_transit', 'delivered', 'returned', 'cancelled']);
        
        // Tạo địa chỉ Việt Nam
        $address = $this->generateVietnameseAddress();
        
        // Tạo ngày đặt hàng trong khoảng 6 tháng gần đây
        $orderDate = $this->faker->dateTimeBetween('-6 months', 'now');
        
        // Tạo ngày thanh toán sau ngày đặt hàng nếu đã thanh toán
        $paymentDate = ($paymentStatus == 'paid' || $paymentStatus == 'refunded') 
            ? $this->faker->dateTimeBetween($orderDate, '+3 days') 
            : null;
        
        // Tạo tổng tiền ngẫu nhiên từ 100.000đ đến 10.000.000đ
        $totalAmount = $this->faker->numberBetween(100000, 10000000);
        
        // Đảm bảo tên không bị trống
        $guestFullname = $user ? $user->name : $fullName;
        $guestEmail = $user ? $user->email : $email;
        $guestPhone = $user ? ($user->phone ?? $phoneNumber) : $phoneNumber;
        
        return [
            'user_id' => $user ? $user->id : null,
            'order_code' => $orderCode,
            'guest_fullname' => $guestFullname, // Đảm bảo luôn có tên
            'guest_email' => $guestEmail,
            'guest_phone' => $guestPhone,
            'order_date' => $orderDate,
            'payment_status' => $paymentStatus,
            'shipping_status' => $shippingStatus,
            'total_amount' => $totalAmount,
            'payment_method' => $paymentMethod,
            'payment_date' => $paymentDate,
            'shipping_address' => $address,
            'created_at' => $orderDate,
            'updated_at' => $orderDate,
        ];
    }
    
    /**
     * Tạo địa chỉ Việt Nam
     *
     * @return string
     */
    private function generateVietnameseAddress(): string
    {
        // Danh sách các tỉnh/thành phố
        $cities = [
            'Hà Nội', 'TP Hồ Chí Minh', 'Đà Nẵng', 'Hải Phòng', 'Cần Thơ', 
            'Bình Dương', 'Đồng Nai', 'Hải Dương', 'Bắc Ninh', 'Hưng Yên',
            'Vĩnh Phúc', 'Quảng Ninh', 'Thái Nguyên', 'Bắc Giang', 'Phú Thọ',
            'Nam Định', 'Thái Bình', 'Ninh Bình', 'Thanh Hóa', 'Nghệ An'
        ];
        
        // Danh sách các quận/huyện
        $districts = [
            'Quận 1', 'Quận 2', 'Quận 3', 'Quận Hoàn Kiếm', 'Quận Ba Đình', 
            'Quận Hai Bà Trưng', 'Quận Đống Đa', 'Quận Cầu Giấy', 'Quận Thanh Xuân',
            'Quận Hà Đông', 'Quận Long Biên', 'Quận Tây Hồ', 'Quận Hoàng Mai',
            'Huyện Gia Lâm', 'Huyện Đông Anh', 'Huyện Sóc Sơn', 'Huyện Thanh Trì',
            'Huyện Mê Linh', 'Thị xã Sơn Tây', 'Huyện Ba Vì'
        ];
        
        // Danh sách các phường/xã
        $wards = [
            'Phường Bến Nghé', 'Phường Bến Thành', 'Phường Cầu Kho', 'Phường Cầu Ông Lãnh',
            'Phường Cống Vị', 'Phường Điện Biên', 'Phường Đội Cấn', 'Phường Giảng Võ',
            'Phường Kim Mã', 'Phường Liễu Giai', 'Phường Ngọc Hà', 'Phường Ngọc Khánh',
            'Phường Nguyễn Trung Trực', 'Phường Phúc Tân', 'Phường Phúc Xá', 'Phường Quán Thánh',
            'Phường Trúc Bạch', 'Phường Trung Phụng', 'Phường Vĩnh Phúc', 'Phường Cửa Đông'
        ];
        
        // Danh sách các đường
        $streets = [
            'Đường Lê Lợi', 'Đường Nguyễn Huệ', 'Đường Đồng Khởi', 'Đường Lê Duẩn',
            'Đường Nguyễn Thị Minh Khai', 'Đường Điện Biên Phủ', 'Đường Cách Mạng Tháng Tám',
            'Đường Võ Văn Kiệt', 'Đường Nguyễn Văn Linh', 'Đường Phạm Văn Đồng',
            'Đường Trần Hưng Đạo', 'Đường Lý Thường Kiệt', 'Đường Hai Bà Trưng',
            'Đường Bà Triệu', 'Đường Phan Đình Phùng', 'Đường Quang Trung',
            'Đường Nguyễn Du', 'Đường Lê Thánh Tông', 'Đường Trần Phú', 'Đường Lê Hồng Phong'
        ];
        
        $houseNumber = $this->faker->numberBetween(1, 200);
        $street = $this->faker->randomElement($streets);
        $ward = $this->faker->randomElement($wards);
        $district = $this->faker->randomElement($districts);
        $city = $this->faker->randomElement($cities);
        
        return "Số {$houseNumber}, {$street}, {$ward}, {$district}, {$city}";
    }
}
