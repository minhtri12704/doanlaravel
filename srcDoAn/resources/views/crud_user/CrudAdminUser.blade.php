@extends('dashboard')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        background-color: #1a1a1a;
        /* Nền đen nhạt */
        color: #ffccdd;
        /* Chữ hồng pastel */
    }

    h2 {
        color: #ffccdd;
        /* Tiêu đề hồng pastel */
    }

    .table {
        background-color: #1a1a1a;
        /* Nền bảng đen */
        color: #ffffff;
        /* Chữ trong bảng trắng */
    }

    .table-bordered th,
    .table-bordered td {
        background-color: #1a1a1a;
        border: 1px solid #d3d3d3;
        color: #ffccdd;
    }

    .table-dark {
        background-color: #3a3a3a;
        /* Nền tiêu đề bảng */
        color: #ffccdd;
        /* Chữ tiêu đề bảng hồng pastel */
    }

    .btn-dark {
        background-color: #ff69b4;
        /* Nền nút hồng đậm */
        color: #ffffff;
        /* Chữ nút trắng */
        border: none;
    }

    .btn-dark:hover {
        background-color: #ff85c0;
        /* Hover sáng hơn */
    }

    .action-icon {
        color: #ffccdd;
        /* Màu icon hồng pastel */
        font-size: 1.2rem;
        /* Kích thước icon */
        margin-right: 10px;
        /* Khoảng cách giữa các icon */
    }

    .action-icon:hover {
        color: #ff85c0;
        /* Hover sáng hơn */
    }

    .pagination .page-link {
        background-color: #2c2c2c;
        /* Nền phân trang */
        color: #ffccdd;
        /* Chữ phân trang hồng pastel */
        border: 1px solid #d3d3d3;
        /* Viền xám nhạt */
    }

    .pagination .page-item.active .page-link {
        background-color: #ff69b4;
        color: #ffffff;
        border: 1px solid #d3d3d3;
    }

    .pagination .page-link:hover {
        background-color: #ff85c0;
        color: #ffffff;
    }
</style>

<h2>Quản lý người dùng</h2>
<div class="text-end mb-3">
    <a href="{{ route('users.create') }}" class="btn btn-dark mb-3">Thêm người dùng</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Mật khẩu</th>
            <th>Phân quyền</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @if($users->count())
        @foreach($users as $user)
        <tr>
            <th>{{ $user->id }}</th>
            <th>{{ $user->name }}</th>
            <th>{{ $user->phone }}</th>
            <th>{{ $user->email }}</th>
            <th>{{ $user->address }}</th>
            <th>{{ $user->password }}</th>
            <th>
                @if (!empty($user->roles) && $user->roles->count())
                @foreach($user->roles as $role)
                <span style="color: #ffccdd">{{ $role->name }}</span>
                @endforeach
                @else
                <span class="text-muted fst-italic">Chưa gán</span>
                @endif
            </th>

            <th>
                <!-- Nút Sửa -->
                <form action="{{ route('user.edit', ['id' => $user->id]) }}" method="GET" style="display: inline-block;">
                    <button type="submit" class="edit" style="background-color: #ffa6c9; padding: 6px 12px; border: none; border-radius: 8px; color: white;">
                        Sửa
                    </button>
                </form>

                <!-- Nút Xóa -->
                <form action="{{ route('user.delete', ['id' => $user->id]) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Bạn có chắc chắn muốn xoá?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete" style="background-color: #ff4d6d; padding: 6px 12px; border: none; border-radius: 8px; color: white;">
                        Xoá
                    </button>
                </form>

            </th>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $users->links() }}
</div>
@endsection