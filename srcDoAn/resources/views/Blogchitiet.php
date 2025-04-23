<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>{{ $bv->tieude }}</title>
  <style>
    body { font-family: Arial; background: #f2f2f2; margin: 0; padding: 0; }
    .container { max-width: 800px; margin: 40px auto; background: white; padding: 20px; border-radius: 8px; }
    img { max-width: 100%; border-radius: 8px; }
    h1 { margin-top: 0; }
    a { color: #007BFF; text-decoration: none; }
  </style>
</head>
<body>
  <div class="container">
    <a href="{{ route('baiviet.index') }}">← Quay lại danh sách</a>
    <h1>{{ $bv->tieude }}</h1>
    <img src="{{ $bv->hinhanh ?? 'https://via.placeholder.com/800x400' }}" alt="Ảnh tin">
    <p>{!! nl2br(e($bv->noidung, 150)) !!}</p>
  </div>
</body>
</html>
