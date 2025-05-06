<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachHangController;

Route::get('/khachhang', [KhachHangController::class, 'index'])->name('khachhang');
Route::get('/khachhang/create', [KhachHangController::class, 'create'])->name('khachhang.create');
Route::post('/khachhang', [KhachHangController::class, 'store'])->name('khachhang.store');
Route::get('/khachhang/{id}/edit', [KhachHangController::class, 'edit'])->name('khachhang.edit');
Route::put('/khachhang/{id}', [KhachHangController::class, 'update'])->name('khachhang.update');
Route::delete('/khachhang/{id}', [KhachHangController::class, 'destroy'])->name('khachhang.destroy');

Route::get('/', function () {
    return view('welcome');
});


