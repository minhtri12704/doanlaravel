@extends('dashboard')

@section('content')
<style>
    .custom-form {
        background-color: #000; /* màu đen */
        color: #f8c8dc; /* hồng pastel */
        border-radius: 10px;
        padding: 30px;
    }

    .custom-form .form-label,
    .custom-form input,
    .custom-form textarea {
        color: #f8c8dc;
    }

    .custom-form input,
    .custom-form textarea {
        background-color: #222;
        border: 1px solid #444;
    }

    .custom-form input::placeholder,
    .custom-form textarea::placeholder {
        color: #f8c8dc99;
    }

    .custom-form .btn {
        background-color: #f8c8dc;
        color: #000;
        border: none;
    }

    .custom-form .btn:hover {
        background-color: #f2a6c2;
    }
</style>

<div class="container d-flex justify-content-center mt-5">
    <div class="custom-form w-50">
        <h2 class="text-center mb-4">Thêm Sản Phẩm</h2>
        <form action="{{ route('products.productStore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Hình ảnh</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Giá</label>
                <input type="text" name="price" class="form-control" required>
            </div>
            <button type="submit" class="btn w-100">Lưu</button>
        </form>
    </div>
</div>
@endsection
