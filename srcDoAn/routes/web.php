<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\UserCrudController;
use App\Http\Controllers\OrderController;

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
//route do an
Route::get('/users', [UserCrudController::class, 'index'])->name('users.index');
Route::get('UserCreate', [UserCrudController::class, 'create'])->name('users.UserCreate');
Route::post('users', [UserCrudController::class, 'postUser'])->name('users.store');
Route::get('/users/{id}/edit', [UserCrudController::class, 'editUser'])->name('users.editUser');
Route::delete('/users/{id}/delete', [UserCrudController::class, 'deleteUser'])->name('users.deleteUser');
Route::put('/users/{id}', [UserCrudController::class, 'updateUser'])->name('users.updateUser');



Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');


Route::get('/', function () {
    return view('welcome');
});