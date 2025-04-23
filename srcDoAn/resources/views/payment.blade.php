@extends('dashboard') <!-- Nếu bạn dùng layout chính -->

@section('title', 'Thanh Toán')

@section('content')
<style>
  body {
    background-color: #f8bbd0; 
    font-family: 'Quicksand', sans-serif;
  }

  .container-pay {
    max-width: 500px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    padding: 30px;
    font-family: 'Quicksand', sans-serif;
  }

  h2 {
    text-align: center;
    color: #880e4f;
    margin-bottom: 30px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: 800;
    color:rgba(170, 52, 115, 0.74);
  }

  input[type="text"],
  input[type="email"],
  input[type="number"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-bottom: 20px;
    font-size: 16px;
  }

  button {
    width: 100%;
    padding: 14px;
    background-color: #880e4f;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #ad1457;
  }

  .note {
    text-align: center;
    font-size: 14px;
    color: #616161;
    margin-top: 20px;
  }
  .container-pay{
    margin-top: 5%;
  }
</style>

<div class="container-pay">
  <h2>Thông Tin Thanh Toán</h2>

  <form action="{{ route('payment.process') }}" method="POST">
    @csrf

    <label for="name">Họ và Tên</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>

    <label for="address">Địa chỉ giao hàng</label>
    <input type="text" id="address" name="address" value="{{ old('address') }}" required>

    <label>Phương thức thanh toán</label>
<div style="margin-bottom: 20px;">
  <label style="display: block; margin-bottom: 5px;">
    <input type="radio" name="payment_method" value="cash" {{ old('payment_method') == 'cash' ? 'checked' : '' }} required>
    Tiền mặt (Thanh toán khi nhận hàng)
  </label>
  <label style="display: block;">
    <input type="radio" name="payment_method" value="bank" {{ old('payment_method') == 'bank' ? 'checked' : '' }}>
    Chuyển khoản ngân hàng (Đã tích hợp)
  </label>
</div>


    <label for="amount">Số tiền (VNĐ)</label>
    <input type="number" id="amount" name="amount" value="{{ old('amount') }}" required>

    <button type="submit">Thanh Toán</button>
  </form>

  <div class="note">
    Cảm ơn bạn đã mua sắm cùng chúng tôi!
  </div>
</div>
@endsection
