<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Hiển thị danh sách danh mục
    public function index(Request $request)
    {
        // Lấy giá trị từ request
        $name = $request->input('name');
        $trangThai = $request->input('status');

        // Truy vấn danh mục với điều kiện tìm kiếm
        $categories = Category::query();

        if (!empty($name)) {
            $categories->where('name', 'like', '%' . $name . '%');
        }

        if ($trangThai !== null) {
            $categories->where('status', $trangThai);
        }

        $categories = $categories->orderBy('id', 'desc')->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    // Hiển thị form tạo danh mục
    public function create()
    {
        return view('admin.categories.create');
    }

    // Lưu danh mục mới vào database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'status' => 'required|boolean',
        ]);

        Category::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được thêm thành công!');
    }

    // Hiển thị form chỉnh sửa danh mục
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    // Cập nhật danh mục
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
            'status' => 'required|boolean',
        ]);

        $category->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được cập nhật thành công!');
    }

    // Xóa danh mục
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Kiểm tra nếu danh mục có sản phẩm thì không cho xóa
        if ($category->products()->count() > 0) {
            return redirect()->route('admin.categories.index')->with('error', 'Không thể xóa danh mục vì đang có sản phẩm.');
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được xóa thành công!');
    }
}
