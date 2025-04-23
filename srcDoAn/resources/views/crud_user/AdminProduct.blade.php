@extends('dashboard')

@section('content')
<style>
    body {
        background-color: #1a1a1a;
        color: #ffccdd;
        font-family: Arial, sans-serif;
    }

    .table {
        background-color: #1a1a1a;
        /* màu nền đen */
        color: #ffccdd;
        /* chữ hồng pastel */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .table td img {
        max-width: 100%;
        max-height: 200px;
        display: block;
        margin: 0 auto;
        border-radius: 8px;
    }


    .table th,
    .table td {
        background-color: #1a1a1a !important;
        /* buộc thẻ <th> và <td> cũng nền đen */
        color: #ffccdd !important;
        /* buộc chữ hồng pastel */
        vertical-align: middle;
        text-align: center;
    }

    .btn-add {
        background-color: #ff69b4;
        color: #fff;
        margin-bottom: 20px;
    }

    .btn-add:hover {
        background-color: #ff85c0;
    }

    .action-icon {
        color: #ffb6c1 !important;
        /* Hồng pastel */
        font-size: 1.2rem;
        margin-right: 10px;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .action-icon:hover {
        color: #ff85c0 !important;
        /* Hồng đậm hơn khi hover */
    }




    .btn-dark {
        background-color: #ff69b4;
        color: #ffffff;
        border: none;
    }

    .btn-dark:hover {
        background-color: #ff85c0;
    }
</style>

<div class="container">
    <h1 class="text-center text-light">Quản Lý Sản Phẩm</h1>
    <div class="text-end mb-3">
        <a href="{{ route('products.productCreate') }}" class="btn btn-add">Thêm Sản Phẩm</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Ảnh</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td style="width: 320px; height: 180px;">
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}"
                        style="width: 180px; height: 180px; object-fit: contain; display: block; margin: 0 auto;">
                </td>
                <td>{{ number_format($product->price, 0, ',', '.') }} VND</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('products.productEdit', $product->id) }}" class="action-icon" title="Sửa">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('products.ProductDelete', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-icon border-0 bg-transparent" title="Xóa">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>




            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection