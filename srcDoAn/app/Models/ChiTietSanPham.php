<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    protected $table = 'san_phams'; // giữ nguyên tên bảng cũ nếu bạn không đổi
    protected $fillable = ['ten_san_pham', 'gia', 'hinh_anh', 'so_sao', 'mo_ta'];
    public function category()
{
    return $this->belongsTo(Category::class);
     
}


}