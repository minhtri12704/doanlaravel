<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\CrudProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//user
Route::get('/users', [CrudUserController::class, 'index'])->name('users.index');
// Hiển thị form thêm
Route::get('/users/create', [CrudUserController::class, 'create'])->name('users.create');

// Xử lý lưu người dùng mới
Route::post('/users/store', [CrudUserController::class, 'store'])->name('users.store');

// Hiển thị form sửa
Route::get('users/edit/{id}', [CrudUserController::class, 'edit'])->name('users.edit');

// Xử lý cập nhật
Route::put('users/{id}', [CrudUserController::class, 'update'])->name('users.update');

// Xử lý xóa người dùng
Route::delete('/users/{id}', [CrudUserController::class, 'delete'])->name('users.delete');


//route productAdmin
Route::get('/products', [CrudProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [CrudProductController::class, 'productCreate'])->name('products.productCreate');
Route::post('/products', [CrudProductController::class, 'productStore'])->name('products.productStore');
Route::get('/products/edit/{id}', [CrudProductController::class, 'productEdit'])->name('products.productEdit');
Route::post('/products/update/{id}', [CrudProductController::class, 'ProductUpdate'])->name('products.ProductUpdate');
Route::delete('/products/{product}', [CrudProductController::class, 'ProductDelete'])->name('products.ProductDelete');




Route::get('/', function () {
    return view('welcome');
});
