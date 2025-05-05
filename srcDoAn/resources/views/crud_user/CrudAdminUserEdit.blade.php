@extends('dashboard')

@section('content')
<style>
    .form-container {
        max-width: 400px; /* Thu nhỏ form */
        margin: 0 auto; /* Căn giữa form */
        padding: 20px;
        background-color: #1a1a1a; /* Nền tối cho form */
        border-radius: 8px; /* Bo góc cho form */
    }

    h2 {
        color: #ffccdd; /* Tiêu đề hồng pastel */
        text-align: center; /* Căn giữa tiêu đề */
        margin-bottom: 20px; /* Khoảng cách dưới tiêu đề */
    }

    label {
        color: #ffccdd; /* Màu chữ label hồng pastel */
    }

    .form-control {
        background-color: #2c2c2c; /* Nền input xám đậm */
        color: #ffccdd; /* Chữ hồng pastel */
        border: 1px solid #d3d3d3; /* Viền xám nhạt */
        border-radius: 4px; /* Bo góc cho input */
        padding: 10px; /* Padding cho input */
        margin-bottom: 15px; /* Khoảng cách giữa các input */
    }

    .form-control:focus {
        background-color: #3a3a3a; /* Nền khi focus */
        color: #ffccdd;
        border-color: #ff69b4; /* Viền hồng đậm khi focus */
        box-shadow: none; /* Bỏ bóng mặc định */
    }

    .btn-dark {
        background-color: #ff69b4; /* Nền nút hồng đậm */
        color: #ffffff; /* Chữ trắng */
        border: none;
        padding: 12px 24px; /* Phóng to nút */
        font-size: 1.2rem; /* Chữ to hơn */
        border-radius: 4px; /* Bo góc cho nút */
        width: 100%; /* Chiếm hết chiều rộng */
        cursor: pointer; /* Con trỏ khi hover */
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
        border-radius: 4px; /* Bo góc cho nút */
        width: 100%; /* Chiếm hết chiều rộng */
        margin-top: 10px; /* Khoảng cách trên nút Reset */
    }

    .btn-reset:hover {
        background-color: #ffec3d; /* Hover sáng hơn */
    }

    .form-container .mb-3:last-child {
        margin-bottom: 0; /* Bỏ khoảng cách dưới cho phần tử cuối cùng */
    }
</style>
<div class="form-container">
    <h2>Chỉnh sửa người dùng</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Tên người dùng</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label>Số điện thoại</label>
            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label>Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="{{ $user->address }}">
        </div>
        <!-- Role -->
        <div class="mb-3">
            <select class="form-control" name="role" required>
                <option value="">-- Chọn vai trò --</option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>

        </div>
        <div class="mb-3">
            <label>Mật khẩu (để trống nếu không đổi)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Cập nhật</button>
    </form>
</div>
@endsection