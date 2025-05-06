<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    protected $table = 'khach_hangs'; // nếu tên bảng không đúng quy ước Laravel

    protected $primaryKey = 'idKhach'; // ✅ CHỈ ĐỊNH đúng tên khóa chính trong DB

    public $timestamps = true; // nếu bạn có cột created_at, updated_at

    protected $fillable = ['Ten', 'SoDienThoai', 'Email', 'DiaChi', 'MatKhau'];

    protected $hidden = ['MatKhau']; // ẩn mật khẩu khi trả về JSON
}
