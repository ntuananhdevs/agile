<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color',
        'ram',
        'storage',
        'price',
        'stock',
        'image',
        'status',
    ];

    // Các phương thức quan hệ và phương thức khác
}