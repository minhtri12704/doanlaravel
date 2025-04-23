@extends('dashboard')

@section('content')
<style>
    .form-container {
        max-width: 400px; /* Thu nhỏ form */
        margin: 0 auto; /* Căn giữa form */
    }
    .form-control {
        background-color: #2c2c2c; /* Nền input xám đậm */
        color: #ffccdd; /* Chữ hồng pastel */
        border: 1px solid #d3d3d3; /* Viền xám nhạt */
    }
    .form-control:focus {
        background-color: #3a3a3a; /* Nền khi focus */
        color: #ffccdd;
        border-color: #ff69b4; /* Viền hồng đậm khi focus */
        box-shadow: none; /* Bỏ bóng mặc định */
    }
    label {
        color: #ffccdd; /* Chữ label hồng pastel */
    }
    h2 {
        color: #ffccdd; /* Tiêu đề hồng pastel */
    }
    .btn-dark {
        background-color: #ff69b4; /* Nền nút hồng đậm */
        color: #ffffff; /* Chữ trắng */
        border: none;
        padding: 12px 24px; /* Phóng to nút */
        font-size: 1.2rem; /* Chữ to hơn */
    }
    .btn-dark:hover {
        background-color: #ff85c0; /* Hover sáng hơn */
    }
    .btn-reset {
        background-color: #ffd700; /* Nền nút làm mới vàng nhạt */
        color: #000000; /* Chữ đen */
        border: none;
        padding: 12px 24px; /* Kích thước tương tự nút Lưu */
        font-size: 1.2rem;
    }
    .btn-reset:hover {
        background-color: #ffec3d; /* Hover sáng hơn */
    }
</style>

<div class="form-container">
    <h2>Thêm người dùng</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tên người dùng</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Số điện thoại</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Địa chỉ</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label>Phân quyền</label>
            <select name="role" class="form-control">
                <option value="admin">Admin</option>
                <option value="employee">Nhân viên</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Mật khẩu</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-dark">Lưu</button>
            <button type="reset" class="btn btn-reset">Làm mới</button>
        </div>
    </form>
</div>
@endsection