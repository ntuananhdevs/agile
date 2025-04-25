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
        // Các giá trị của role từ Enum
        $roles = ['customer', 'admin'];

        return view('admin.users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'avatar' => 'nullable|image|max:2048',
            'role' => 'required|in:customer,admin',
        ]);

        // Xử lý avatar
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null; // Nếu không có avatar, để giá trị là null
        }

        // Tạo người dùng mới
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Mã hóa mật khẩu
            'avatar' => $avatarPath,
            'role' => $request->role,
            'status' => $request->status,
            // Lưu vai trò (customer hoặc admin)
        ]);

        // Trở về với thông báo thành công
        return redirect()->route('admin.users.index')->with('success', 'Thêm người dùng thành công!');
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = ['customer', 'admin'];

        return view('admin.users.edit', compact('user', 'roles'));
    }

    // Xử lý cập nhật người dùng
    public function update(Request $request, $id)
    {
        // Lấy người dùng từ cơ sở dữ liệu
        $user = User::findOrFail($id);

        // Validate dữ liệu
        $dataValidate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'role' => 'required|in:customer,admin',
        ]);

        // Xử lý avatar nếu có
        if ($request->hasFile('avatar')) {
            // Xóa avatar cũ nếu có
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Lưu avatar mới
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $dataValidate['avatar'] = $avatarPath;
        }

        // Cập nhật thông tin người dùng bao gồm trạng thái
        $user->update([
            'name' => $dataValidate['name'],
            'email' => $dataValidate['email'],
            'role' => $dataValidate['role'],
            'avatar' => $dataValidate['avatar'] ?? $user->avatar,  // Giữ lại avatar cũ nếu không có thay đổi
        ]);

        // Quay lại trang danh sách người dùng
        return redirect()->route('admin.users.index')->with('success', 'Cập nhật người dùng thành công!');
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

        return redirect()->route('admin.users.index')->with('success', 'Xóa người dùng thành công!');;
    }
}