<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
{
    $query = User::query();

    // Tìm kiếm theo ID
    if ($request->filled('id')) {
        $query->where('id', $request->id);
    }

    // Tìm kiếm theo tên
    if ($request->filled('name')) {
        $query->where('name', 'LIKE', '%' . $request->name . '%');
    }

    // Tìm kiếm theo email
    if ($request->filled('email')) {
        $query->where('email', 'LIKE', '%' . $request->email . '%');
    }

    $users = $query->paginate(10);

    return view('admin.users.index', compact('users'));
}

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
{
    $dataValidate = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        'avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
    ]);

    // Hash passworda
    $dataValidate['password'] = bcrypt($request->password);

    // Xử lý upload avatar nếu có
    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $dataValidate['avatar'] = 'storage/' . $avatarPath; // Đảm bảo đường dẫn đúng
    }
    

    User::create($dataValidate);

    return redirect()->route('admin.users.index');
}

    // Hiển thị form chỉnh sửa người dùng
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    // Xử lý cập nhật người dùng
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate dữ liệu
        $dataValidate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        // Xử lý avatar
        if ($request->hasFile('avatar')) {
            // Xóa avatar cũ nếu có
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Lưu avatar mới
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $dataValidate['avatar'] = $avatarPath;
        }

        // Cập nhật thông tin người dùng
        $user->update($dataValidate);

        return redirect()->route('admin.users.index');
    }
    

public function destroy($id)
{
    $user = User::findOrFail($id);

    // Kiểm tra và xóa avatar
    if (!empty($user->avatar)) {
        Storage::disk('public')->delete($user->avatar);
    }

    // Xóa user
    $user->delete();

    return redirect()->route('admin.users.index');
}
}
