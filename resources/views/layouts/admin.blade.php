<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spike Admin - Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Sidebar */
        .sidebar {
            width: 280px;
            /* Giảm từ 250px xuống 220px */
            height: 100vh;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            display: block;
            transition: 0.3s;
            margin-bottom: 6px;
            font-size: 16px;
            font-weight: 500;
        }

        .sidebar a:hover {
            background: #007bff;
            color: white;
            border-radius: 10px;
        }

        .sidebar .active {
            background: #007bff;
            color: white;
            border-radius: 10px;
        }

        /* Navbar */
        .topbar {
            height: 60px;
            background: #fff;
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2);
            padding: 0 20px;
            border-radius: 20px
        }

        .topbar .icon-badge {
            position: relative;
        }

        /* .topbar .icon-badge::after {
            content: '•';
            position: absolute;
            top: 0;
            right: 0;
            color: red;
            font-size: 20px;
        } */

        /* Main Content */
        .main-content {
            margin-left: 280px;
            /* Đảm bảo main content không bị dính vào sidebar */
            padding: 20px;
            min-height: 100vh;
        }

        .img-circle {
            width: 50px;
            /* Điều chỉnh kích thước */
            height: 50px;
            border-radius: 50%;
            /* Làm tròn ảnh */
            object-fit: cover;
            /* Cắt ảnh cho vừa */
        }

        /* Căn chỉnh form tìm kiếm */
        .d-flex {
            align-items: center;
        }

        /* Input search */
        .form-control-search {
            width: 250px;
            /* Điều chỉnh độ rộng */
            padding: 8px 12px;
            font-size: 14px;
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.1);

            border-radius: 5px 0 0 5px;

            /* Bo tròn góc trái */

        }

        /* Nút tìm kiếm */
        .btn-outline-secondary {
            border-radius: 0 5px 5px 0;
            /* Bo tròn góc phải */
            padding: 8px 16px;
            transition: 0.3s;
            color: #007bff;

            
            
        }

        /* Hiệu ứng hover cho nút */
        .btn-outline-secondary:hover {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>
</head>

<body class="bg-light">

    <div class="d-flex">
        <!-- Sidebar -->
        @include('admin.partials.sidebar')

        <!-- Main Content -->
        <div class="flex-grow-1 main-content">
            <!-- Top Bar -->
            @include('admin.partials.header')

            <!-- Content Area -->
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>
    <script></script>
</body>

</html>
