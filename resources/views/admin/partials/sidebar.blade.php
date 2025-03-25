<div class="sidebar p-3">
    <div class="d-flex align-items-center mb-4">
        <div class="bg-success p-2 rounded-circle text-white">
            🤡
        </div>
        <span class="ms-2 fw-bold fs-5">Spike Admin</span>
    </div>
    <nav>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <ion-icon name="bar-chart-outline"></ion-icon> Dashboard
        </a>
        <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <ion-icon name="people-outline"></ion-icon> Quản lý người dùng
        </a>
        <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            <ion-icon name="list-outline"></ion-icon> Quản lý danh mục
        </a>
        <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
            <ion-icon name="pricetag-outline"></ion-icon> Quản lý sản phẩm
        </a>
        <a href="{{ route('admin.orders.index') }}" class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
            <ion-icon name="cart-outline"></ion-icon> Quản lý đơn hàng
        </a>
        <form action="" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger w-100 d-flex align-items-center">
                <ion-icon name="log-out-outline" class="me-2"></ion-icon> Đăng xuất
            </button>
        </form>
    </nav>
</div>

