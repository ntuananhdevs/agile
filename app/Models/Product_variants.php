<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_variants extends Model
{
    use HasFactory;
    protected $table = 'product_variants';
    protected $fillable = [
        'product_id',
        'variant_sku'   ,
        'color',
        'ram',
        'storage',
        'price',
        'stock',
        'image',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id')->select('id', 'name');
    }
}
