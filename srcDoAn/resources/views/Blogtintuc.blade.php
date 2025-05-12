<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <title>Blog Tin Tức</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1c1c1e;
    }
    .navbar {
      background-color: #2c2c2e;
    }
    .navbar-brand {
      color: #ffb6c1;
      font-weight: bold;
    }
    .navbar-nav .nav-link {
      color: #f8e8f9 ;
    }
    .navbar-nav .nav-link:hover {
      color: #ffd6ec ;
    }
    header {
      background-color: #333;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    .container {
      width: 90%;
      max-width: 1000px;
      margin: 20px auto;
    }

    .post {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      padding: 20px;
    }

    .post img {
      max-width:300px;
      border-radius: 8px;
    }

    .post h2 {
      margin-top: 10px;
    }

    .post p {
      color: #444;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 40px;
    }

    @media (max-width: 600px) {
      .post h2 {
        font-size: 1.2em;
      }

      .post p {
        font-size: 0.9em;
      }
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg px-4">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog">Blog</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
  </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
  <header>
    <h1>Blog Tin Tức</h1>
    <p>Cập nhật những sản phẩm mới nhất mỗi ngày!</p>
  </header>

  <div class="container">
    @foreach($baiviet as $bv)
    <div class="d-flex bg-white mb-3">  
    <div class="p-2 "> <img width="100px" src="{{ $bv->hinhanh ?? 'https://via.placeholder.com/400x400' }}" alt="Ảnh tin tức" ></div>
    
    <div class="p-2 "><h2>{{ $bv->tieude }}</h2>
        <p>{{ \Illuminate\Support\Str::limit($bv->noidung, 150) }}</p>
        <a href="{{ route('baiviet.show', $bv->id) }}">Đọc thêm</a></div>
  </div>
     
    @endforeach
  </div>

  <footer>
   Thông tin liên hệ  || Về công ty   || Nhà tài trợ
  </footer>
<!-- javas -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>