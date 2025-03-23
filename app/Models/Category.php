<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['ten_danh_muc', 'trang_thai'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
