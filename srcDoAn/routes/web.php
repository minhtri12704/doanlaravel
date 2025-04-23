<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCrudController;
use App\Http\Controllers\BaiVietController;

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

//route category
Route::get('/categories', [CategoryCrudController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}/edit', [CategoryCrudController::class, 'editCategory'])->name('categories.editCategory');
Route::delete('/categories/{id}', [CategoryCrudController::class, 'deleteCategory'])->name('categories.deleteCategory');
Route::get('/categories/create', [CategoryCrudController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryCrudController::class, 'store'])->name('categories.store');
Route::put('/categories/{id}', [CategoryCrudController::class, 'update'])->name('categories.update');

//route tintuc


Route::get('/blog', [BaiVietController::class, 'index'])->name('baiviet.index');
Route::get('/blog/{id}', [BaiVietController::class, 'show'])->name('baiviet.show');


Route::get('/', function () {
    return view('welcome');
});
