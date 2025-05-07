@extends('dashboardHomePage')

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
<div class="container mt-5">
    <h2 class="text-center mb-4" style="color: white; text-shadow: 1px 1px 3px #000;">Danh sách Sản phẩm</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @forelse($sanPhams as $sp)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/' . $sp->hinh_anh) }}"
                     alt="{{ $sp->ten_san_pham }}"
                     class="card-img-top img-fluid"
                     style="height: 250px;width:350px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title text-danger" style="min-height: 48px;">{{ $sp->ten_san_pham }}</h5>
                    <div class="mb-2">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $sp->so_sao)
                                <i class="bi bi-star-fill text-warning"></i>
                            @else
                                <i class="bi bi-star text-muted"></i>
                            @endif
                        @endfor
                    </div>

                    <p class="card-text">
                        <strong class="text-dark">Giá:</strong>
                        <span class="text-danger">{{ number_format($sp->gia, 0, ',', '.') }}₫</span><br>
                        <strong class="text-dark">Ngày tạo:</strong> {{ $sp->created_at->format('d/m/Y') }}
                    </p>

                    {{-- Nút mua ngay --}}
                    <div class="d-grid">
                        <a href="#" class="btn btn-dark btn-sm">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center text-light">Không có sản phẩm nào.</div>
        @endforelse
    </div>

    <!-- Phân trang -->
    <div class="mt-4 d-flex justify-content-center">
        {{ $sanPhams->links() }}
    </div>
</div>

@endsection
