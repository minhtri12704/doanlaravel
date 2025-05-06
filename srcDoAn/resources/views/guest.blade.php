@extends('dashboard')

@section('content')
<style>
    body {
        background-color: #1a1a1a;
        color: #ffccdd;
    }

    h2 {
        color: #ffccdd;
    }

    .table {
        background-color: #1a1a1a;
        color: #ffffff;
    }

    .table-bordered th,
    .table-bordered td {
        background-color: #1a1a1a;
        border: 1px solid #d3d3d3;
        color: #ffccdd;
    }

    .table-dark {
        background-color: #3a3a3a;
        color: #ffccdd;
    }

    .btn-custom {
        background-color: #ff69b4;
        border: none;
        color: white;
    }
    .pagination .page-item.active .page-link {
        background-color: #ff69b4;
        color: #ffffff;
        / Chữ trắng /
        border: 1px solid #d3d3d3;
    }
    .pagination .page-link:hover {
        background-color: #ff85c0;
        color: #ffffff;
    }
    .btn-custom:hover {
        background-color: #ff85c0;
    }
    
</style>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Danh sách khách hàng</h2>
    <a href="{{ route('khachhang.create') }}" class="btn btn-custom">+ Thêm khách hàng</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tên</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Mật Khẩu</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dsKhach as $kh)
            <tr>
                <td>{{ $kh->Ten }}</td>
                <td>{{ $kh->SoDienThoai }}</td>
                <td>{{ $kh->Email }}</td>
                <td>{{ $kh->DiaChi }}</td>
                <td>{{ $kh->MatKhau }}</td>
                <td>
                    <a href="{{ route('khachhang.edit', $kh->idKhach) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('khachhang.destroy', $kh->idKhach) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- Hiển thị phân trang --}}
<div class="d-flex justify-content-center">
    {{ $dsKhach->links() }}
</div>
@endsection
