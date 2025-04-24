@extends('dashboard')

@section('content')
<style>
    body {
        background-color: #1a1a1a;
        color: #ffccdd;
        font-family: Arial, sans-serif;
    }

    .form-wrapper {
        max-width: 600px;
        margin: 0 auto;
        background-color: #2c2c2c;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .form-label, .form-control, textarea, input {
        color: #ffccdd !important;
        background-color: #1a1a1a !important;
        border-color: #ff85c0 !important;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 133, 192, 0.25);
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

<div class="form-wrapper">
    <h2 class="text-light text-center mb-4">Sửa Sản Phẩm</h2>
    <form action="{{ route('products.ProductUpdate', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label text-light">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Hình ảnh</label><br>
            <img src="{{ asset('storage/images/' . $product->image) }}" width="150" class="mb-2">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Mô tả</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label text-light">Giá</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <button type="submit" class="btn btn-dark">Cập Nhật</button>
    </form>
</div>
@endsection


