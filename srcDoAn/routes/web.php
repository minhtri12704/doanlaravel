<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCrudController;
use App\Http\Controllers\BaiVietController;
use App\Models\Category;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\CrudProductController;
use App\Http\Controllers\ProductListController;

use App\Http\Controllers\UserCrudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KhuyenMaiController;
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
Route::post('/users', [CrudUserController::class, 'store'])->name('users.store');

// Hiển thị form sửa
//Route::get('users/edit/{id}', [CrudUserController::class, 'edit'])->name('users.edit');

// Xử lý cập nhật
Route::get('/users/update/{id}', [CrudUserController::class, 'edit'])->name('user.edit');
Route::put('/users/{id}', [CrudUserController::class, 'update'])->name('users.update');

//Route::put('/users/{id}', [CrudUserController::class, 'update'])->name('users.update');

// Xử lý xóa người dùng
//Route::delete('/users/{id}', [CrudUserController::class, 'delete'])->name('users.delete');
Route::get('/users/delete/{id}', [CrudUserController::class, 'delete'])->name('user.delete');

//route category
Route::get('/categories', [CategoryCrudController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}/edit', [CategoryCrudController::class, 'editCategory'])->name('categories.editCategory');
Route::delete('/categories/{id}', [CategoryCrudController::class, 'deleteCategory'])->name('categories.deleteCategory');
Route::get('/categories/create', [CategoryCrudController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryCrudController::class, 'store'])->name('categories.store');
Route::put('/categories/{id}', [CategoryCrudController::class, 'update'])->name('categories.update');


//Danh sách sản phẩm
Route::get('/sanpham', [ProductListController::class, 'index'])->name('sanpham.index');
//route lấy danh mục tại HomePage
Route::get('/sanpham/{id}', [ProductListController::class, 'showByCategory'])->name('products.byCategory');

//route tintuc
//Route::get('/blog', [BaiVietController::class, 'index'])->name('baiviet.index');
//Route::get('/blog/{id}', [BaiVietController::class, 'show'])->name('baiviet.show');

//Trang Khuyến Mãi
Route::get('/khuyenmai', [KhuyenMaiController::class, 'index'])->name('khuyenmai.index');

//Trang thêm mới
Route::get('/khuyenmai/create', [KhuyenMaiController::class, 'create'])->name('khuyenmai.create');

//Xử lý thêm mới
Route::post('/khuyenmai', [KhuyenMaiController::class, 'store'])->name('khuyenmai.store');

//Trang sửa
Route::get('/khuyenmai/{id}/edit', [KhuyenMaiController::class, 'edit'])->name('khuyenmai.edit');

//Xử lý cập nhật
Route::put('/khuyenmai/{id}', [KhuyenMaiController::class, 'update'])->name('khuyenmai.update');

//Xử lý xóa
Route::delete('/khuyenmai/{id}', [KhuyenMaiController::class, 'destroy'])->name('khuyenmai.destroy');

// route CrudProduct với prefix
/*
prefix có chức năng là mọi đường dẫn trong prefix này sẽ bắt đầu bằng products(tên đặt trong prefix)
vd như ở dòng 61 chỉ có dấu / chứ không thì bình thường nó sẽ là /products
*/ 
Route::get('/products', [CrudProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [CrudProductController::class, 'create'])->name('products.create');
Route::post('/products', [CrudProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [CrudProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [CrudProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [CrudProductController::class, 'delete'])->name('products.delete');












//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//route tin tuc
Route::get('/blog', [BaiVietController::class, 'index'])->name('baiviet.index');
Route::get('/blog/{id}', [BaiVietController::class, 'show'])->name('baiviet.show');



Route::get('/', function () {
    return view('welcome');
});
