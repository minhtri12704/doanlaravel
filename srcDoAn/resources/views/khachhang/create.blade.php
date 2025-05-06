@extends('dashboard')

@section('content')
<h2>Thêm khách hàng</h2>

<form action="{{ route('khachhang.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên</label>
        <input type="text" name="Ten" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Số điện thoại</label>
        <input type="text" name="SoDienThoai" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="Email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Địa chỉ</label>
        <input type="text" name="DiaChi" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Mật khẩu</label>
        <input type="text" name="MatKhau" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Thêm</button>
    <a href="{{ route('khachhang') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
