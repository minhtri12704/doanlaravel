<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Định nghĩa bảng nếu tên bảng không phải là 'products'
    protected $table = 'products';

    // Các cột có thể điền dữ liệu (fillable)
    protected $fillable = [
        'name', 'description', 'price', 'image'
    ];

    // Cấu hình giá trị mặc định nếu cần
    protected $attributes = [
        'price' => 0.0,
    ];

    // Nếu bạn muốn tự động cập nhật trường created_at và updated_at
    public $timestamps = true;

    // Bạn có thể định nghĩa thêm các mối quan hệ ở đây nếu có (ví dụ: category, order, v.v.)
}
