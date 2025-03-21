<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(10); // Lấy 10 sản phẩm mỗi trang
        return view('admin.products.index' , compact('products'));
    }
}
