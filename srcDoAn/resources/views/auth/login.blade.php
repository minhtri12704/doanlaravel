<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right,rgb(255, 255, 255),rgb(61, 170, 254));
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background-color: rgb(214, 224, 235);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-container h2 {
      color: #2e2e2e;
      margin-bottom: 20px;
      font-size: 36px;
      font-weight: bold;
    }

    .login-container input {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 16px;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      background-color: rgb(62, 138, 253);
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-container button:hover {
      background-color: rgb(0, 42, 125);
    }

    .login-container p {
      margin-top: 15px;
      color: #666;
      font-size: 14px;
    }

    @media (max-width: 500px) {
      .login-container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Đăng nhập</h2>

    @if (session('error'))
      <div style="color: red; margin-bottom: 10px;">
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
      <input type="password" name="password" placeholder="Mật khẩu" required>

      <button type="submit">Đăng nhập</button>
      @if (session('success'))
  <div style="color: green; margin-bottom: 10px;">
    {{ session('success') }}
  </div>
@endif

    </form>

    <p>Chưa có tài khoản? 
      <a href="{{ route('register') }}" style="color:rgb(50, 113, 209);">Đăng ký</a>
    </p>
  </div>

</body>
</html>