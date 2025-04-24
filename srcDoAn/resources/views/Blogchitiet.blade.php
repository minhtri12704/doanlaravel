<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<!--Tiêu đề của bài viết-->
  <title>{{ $bv->tieude }}</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: white;
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
    .container { 
      width: 90%;
      max-width: 1000px;
      margin: 20px auto;
     }
   
    h1 { margin-top: 0; }
    a { color: #007BFF; text-decoration: none; }
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
  <div class="container">
  
    <a href="{{ route('baiviet.index') }}">← Quay lại danh sách</a>
    <h1>{{ $bv->tieude }}</h1>
    <img width="500px" src="{{ $bv->hinhanh ?? 'https://via.placeholder.com/800x400' }}" alt="Ảnh tin tức" >
<!-- nl2br(...): Chuyển các xuống dòng (\n) trong nội dung thành thẻ <br> để hiển thị đúng dòng. -->
<!-- Tóm lại !! nl2br cho phép dòng mới-->
    <p>{!! nl2br(e($bv->noidung)) !!}</p>
  </div>
  <!-- javas -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>