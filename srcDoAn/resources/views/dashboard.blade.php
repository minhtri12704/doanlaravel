<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
        margin: 0;
        padding: 0;
        background-color: #121212; 
        font-family: 'Segoe UI', sans-serif;
        color: #fce4ec;
    }

    


    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 60px;
        background-color: #1f1f1f;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        z-index: 2000;
        color: #f8a5c2;
    }

    .nav-left {
        font-weight: bold;
        font-size: 18px;
    }

    .nav-right a {
        color: #fce4ec;
        text-decoration: none;
    }

    .sidebar {
        position: fixed;
        top: 60px; /* dưới navbar */
        left: 0;
        width: 220px;
        height: calc(100vh - 60px);
        background-color: #2d2d2d;
        padding: 20px;
        color: #f8a5c2;
    }

    .sidebar a {
    display: block;
    color: #fce4ec;
    padding: 12px 0; 
    margin-bottom: 8px;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
    font-size: 16px; 
}


    .sidebar a:hover {
        background-color: #ff6b9d;
        border-radius: 5px;
        padding-left: 10px;
        color: white;
    }

    .main-content {
        margin-left: 220px;
        padding: 80px 20px 20px 20px;
        background-color: #121212;
        min-height: 100vh;
    }

    h1 {
        color: #f8a5c2;
    }

    table {
        width: 100%;
        background-color: #1e1e1e;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(255,255,255,0.05);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #f8a5c2;
    }

    th {
        background-color: #f8a5c2;
        color: black;
    }

    .mt-4 {
        margin-top: 1rem;
    }
</style>


  
  
</head>
<body>

<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand" style="color: #f8a5c2;" href="{{ route('orders.index') }}">Admin User</a>
  <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon text-white"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      
      <li class="nav-item">
        <a class="nav-link text-danger" href="/logout">
          <i class="fas fa-sign-out-alt"></i> Đăng xuất
        </a>
      </li>
    </ul>
  </div>
</nav>

<!-- Sidebar nằm bên trái -->
<div class="sidebar">
    <h3>Quản lý</h3>
    <a href="">Quản lí người dùng</a>
    <a href="#">Quản lí khách hàng</a>
    <a href="#">Quản lí sản phẩm</a>
    <a href="{{ route('orders.index') }}">Quản lí đơn hàng</a>
    <a href="#">Quản lí danh mục</a>
</div>
<div class="content">
  @yield('content')
</div> 

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

cdn.jsdelivr.net