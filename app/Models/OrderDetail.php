<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_variant_id',
        'product_name',
        'price',
        'quantity',
        'discount_value',
        'discount_type',
    ];

    /**
     * Lấy đơn hàng liên quan
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Lấy sản phẩm liên quan
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Lấy biến thể sản phẩm liên quan
     */
    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}