<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #1c1c1e;
      color: #f5e6f7;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background-color: #2c2c2e;
    }
    .navbar-brand {
      color: #ffb6c1 !important;
      font-weight: bold;
    }
    .navbar-nav .nav-link {
      color: #f8e8f9 !important;
    }
    .navbar-nav .nav-link:hover {
      color: #ffd6ec !important;
    }
    .content {
      padding: 30px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand" href="#">🌸 Admin Dashboard</a>
  <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon text-white"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link text-danger" href="#" id="logoutBtn">
          <i class="fas fa-sign-out-alt"></i> Đăng xuất
        </a>
      </li>
    </ul>
  </div>
</nav>

<div class="content">
  @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.getElementById('logoutBtn').addEventListener('click', function(event) {
    event.preventDefault(); 

    const confirmLogout = confirm('Bạn có chắc chắn muốn đăng xuất?');

    if (confirmLogout) {
      window.location.href = "{{ route('login') }}"; 
    }
  });
</script>

</body>
</html>