<?php

namespace App\Http\Controllers;
use App\Models\KhachHang;
use Illuminate\Http\Request;


class KhachHangController extends Controller
{
    
        public function index() {
            $dsKhach = KhachHang::paginate(10);
            return view('guest', compact('dsKhach'));
        }
    
        public function create() {
            return view('khachhang.create');
        }
    
        public function store(Request $request) {
            KhachHang::create($request->all());
            return redirect()->route('khachhang')->with('success', 'Thêm thành công');
        }
    
        public function edit($id) {
            $khach = KhachHang::findOrFail($id);
            return view('khachhang.edit', compact('khach'));
        }
    
        public function update(Request $request, $id) {
            $khach = KhachHang::findOrFail($id);
            $khach->update($request->all());
            return redirect()->route('khachhang')->with('success', 'Cập nhật thành công');
        }
    
        public function destroy($id) {
            KhachHang::destroy($id);
            return redirect()->route('khachhang')->with('success', 'Xóa thành công');
        }
    
}
