@extends('dashboard')

@section('content')
<h2>Chỉnh sửa khách hàng</h2>

<form action="{{ route('khachhang.update', $khach->idKhach) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Tên</label>
        <input type="text" name="Ten" class="form-control" value="{{ $khach->Ten }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Số điện thoại</label>
        <input type="text" name="SoDienThoai" class="form-control" value="{{ $khach->SoDienThoai }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="Email" class="form-control" value="{{ $khach->Email }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Địa chỉ</label>
        <input type="text" name="DiaChi" class="form-control" value="{{ $khach->DiaChi }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Mật khẩu</label>
        <input type="text" name="MatKhau" class="form-control" value="{{ $khach->MatKhau }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <a href="{{ route('khachhang') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection
