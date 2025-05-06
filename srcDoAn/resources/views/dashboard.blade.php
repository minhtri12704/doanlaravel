<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: #f5f5f5; /* ✅ Đổi màu chữ sang trắng nhẹ */
        }
        .sidebar {
            background-color: #2d2d2d;
            min-height: 100vh;
        }
        .sidebar h4 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .sidebar a {
            color: #f5f5f5;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 12px 0;
            display: block;
            transition: color 0.3s ease;
        }
        .sidebar a:hover,
        .sidebar a.active {
            color: #ff85c0;
        }
        .sidebar .nav-item {
            margin-bottom: 10px;
        }
        .content {
            padding: 20px;
            background-color: #1a1a1a;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <div class="sidebar p-3" style="width: 250px;">
        <h4>Quản trị</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('khachhang') }}" class="nav-link {{ request()->is('khachhang') ? 'active' : '' }}">
                    Người dùng
                </a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Quản lý khách hàng</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Quản lý sản phẩm</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Quản lý đơn hàng</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Quản lý danh mục</a></li>
        </ul>
    </div>
    <div class="content flex-grow-1">
        @yield('content')
    </div>
</div>
</body>
</html>
