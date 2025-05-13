@extends('dashboardHomePage') {{-- hoặc layout bạn đang dùng --}}

@section('title', 'Giỏ hàng')

@section('content')
<div class="container my-4">
    <h2 class="mb-4 text-white">🛒 Giỏ hàng của bạn</h2>
    <div class="row">
        <!-- Bên trái: Danh sách sản phẩm -->
        <div class="col-md-8">
            @if(session('cart') && count(session('cart')) > 0)
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach(session('cart') as $id => $item)
                            @php $itemTotal = $item['price'] * $item['quantity']; $total += $itemTotal; @endphp
                            <tr>
                                <td>
                                    <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" width="60" class="me-2">
                                    {{ $item['name'] }}
                                </td>
                                <td>{{ number_format($item['price'], 0, ',', '.') }}đ</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ number_format($itemTotal, 0, ',', '.') }}đ</td>
                                <td>
                                    <a href="{{ route('cart.remove', $id) }}" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-warning">Giỏ hàng của bạn đang trống.</div>
            @endif
        </div>

        <!-- Bên phải: Mã giảm giá + Thanh toán -->
        <div class="col-md-4">
            <div class="card bg-dark text-white p-3">
                <form action="{{ route('cart.applyDiscount') }}" method="POST" class="mb-3">
                    @csrf
                    <label for="discount_code" class="form-label">Nhập mã giảm giá:</label>
                    <div class="input-group">
                        <input type="text" name="discount_code" id="discount_code" class="form-control" placeholder="ABC123">
                        <button type="submit" class="btn btn-primary">Áp dụng</button>
                    </div>
                </form>

                <p>Tạm tính: <strong>{{ number_format($total, 0, ',', '.') }}đ</strong></p>
                @if(session('discount_amount'))
                    <p>Giảm giá: <strong>-{{ number_format(session('discount_amount'), 0, ',', '.') }}đ</strong></p>
                    <p>Thành tiền: <strong>{{ number_format($total - session('discount_amount'), 0, ',', '.') }}đ</strong></p>
                @endif

                <form action="{{ route('cart.checkout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success w-100 mt-3">Thanh toán</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
