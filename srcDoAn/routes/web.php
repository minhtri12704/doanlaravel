<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCrudController;
use App\Http\Controllers\BaiVietController;

use App\Http\Controllers\CrudUserController;
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

//route tintuc
//Route::get('/blog', [BaiVietController::class, 'index'])->name('baiviet.index');
//Route::get('/blog/{id}', [BaiVietController::class, 'show'])->name('baiviet.show');


>>>>>>> Crud_Category
Route::get('/', function () {
    return view('welcome');
});

