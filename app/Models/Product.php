<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'category_id',
        'image',
    ];

    // Các phương thức quan hệ và phương thức khác
    public function productVariants()
    {
        return $this->hasMany(Product_variants::class, 'product_id', 'id');
    }
    
    // Add the category relationship
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}