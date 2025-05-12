<?php
namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function index() {
        $baiviet = BaiViet::orderBy('created_at', 'desc')->paginate(5);
        return view('Blogtintuc', compact('baiviet'));
    }

    public function show($id) {
        $bv = BaiViet::findOrFail($id);
        return view('Blogchitiet', compact('bv'));
    }
}
