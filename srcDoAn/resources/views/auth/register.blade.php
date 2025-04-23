<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #2e2e2e, #f8cdda);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .register-container {
      background-color: #f9f9f9;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 450px;
      text-align: center;
    }

    .register-container h2 {
      color: #2e2e2e;
      margin-bottom: 20px;
    }

    .register-container input {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 16px;
    }

    .register-container button {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      background-color: #ff99aa;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .register-container button:hover {
      background-color: #e26d89;
    }

    .register-container p {
      margin-top: 15px;
      color: #666;
      font-size: 14px;
    }

    .error-message {
      color: red;
      font-size: 14px;
      text-align: left;
      margin-bottom: 8px;
    }

    @media (max-width: 500px) {
      .register-container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="register-container">
    <h2>Tạo tài khoản</h2>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <input type="text" name="name" placeholder="Họ và tên" value="{{ old('name') }}" required>
      @error('name')
        <div class="error-message">{{ $message }}</div>
      @enderror

      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
      @error('email')
        <div class="error-message">{{ $message }}</div>
      @enderror

      <input type="password" name="password" placeholder="Mật khẩu" required>
      @error('password')
        <div class="error-message">{{ $message }}</div>
      @enderror

      <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>

      <button type="submit">Đăng ký</button>
    </form>

    <p>Đã có tài khoản?
      <a href="{{ route('login') }}" style="color:#ff99aa;">Đăng nhập</a>
    </p>
  </div>

</body>
</html>