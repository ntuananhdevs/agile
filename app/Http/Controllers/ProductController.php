<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category'); // Eager load để tránh lỗi null

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->orderBy('id', 'desc')->paginate(10);

        // Lấy danh sách danh mục để đổ vào dropdown
        $categories = Category::all();

        return view('admin.products.index', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $dataNew = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ],
            [
                'name.required' => 'Tên sản phẩm không được để trống',
                'description.required' => 'Mô tả sản phẩm không được để trống',
                'category_id.required' => 'Danh mục sản phẩm không được để trống'
            ]);

        Product::create($dataNew);
        return redirect()->route('admin.products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $dataNew = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ],
            [
                'name.required' => 'Ten san pham khong duoc de trong',
                'description.required' => 'Mota san pham khong duoc de trong',
                'category_id.required' => 'Danh muc san pham khong duoc de trong'
            ]);

        Product::findOrFail($id)->update($dataNew);
        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('admin.products.index');
    }

    
}

