<header>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="logo">
                    @yield('logo')
                </a>
            </div>
            <div class="navbar-menu">
                @yield('navigation')
            </div>
            <div class="navbar-end">
                @yield('header-actions')
            </div>
        </div>
    </nav>
</header>
