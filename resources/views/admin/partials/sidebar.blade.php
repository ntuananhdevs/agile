<div class="sidebar p-3">
    <div class="d-flex align-items-center mb-4">
        <div class="bg-success p-2 rounded-circle text-white">
            🤡
        </div>
        <span class="ms-2 fw-bold fs-5">Spike Admin</span>
    </div>
    <nav>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-bar-chart"></i> Dashboard
        </a>
        <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <i class="bi bi-info-circle"></i> Quản lý người dùng
        </a>
        <a href="#" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
            <i class="bi bi-toggle-on"></i> Quản lý danh mục
        </a>
        <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
            <i class="bi bi-card-text"></i> Quản lý sản phẩm
        </a>
        <a href="#" class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
            <i class="bi bi-table"></i> Quản lý đơn hàng
        </a>
    </nav>
</div>