<header class="bg-primary text-white py-4">
    <nav class="container d-flex justify-content-between align-items-center">
        <a href="/" class="fs-3 fw-bold text-white text-decoration-none">Cửa hàng</a>
        <div class="d-flex gap-3">
            <a href="{{ route('client.home') }}" class="text-white text-decoration-none">Trang chủ</a>
            <a href="" class="text-white text-decoration-none">Sản phẩm</a>
            <a href="" class="text-white text-decoration-none">Bài viết</a>
            <a href="" class="text-white text-decoration-none">Liên hệ</a>
            @auth
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link text-danger">Đăng xuất</button>
            </form>
            
            @else
                <a href="{{ route('login') }}" class="bg-white text-primary px-3 py-1 rounded text-decoration-none">Đăng nhập</a>
            @endauth
        </div>
    </nav>
</header>
