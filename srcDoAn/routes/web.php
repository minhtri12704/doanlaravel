<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\UserCrudController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('/dashboard', [OrderController::class, 'dashboard'])->name('dashboard');

//route do an
Route::get('/users', [UserCrudController::class, 'index'])->name('users.index');
Route::get('UserCreate', [UserCrudController::class, 'create'])->name('users.UserCreate');
Route::post('users', [UserCrudController::class, 'postUser'])->name('users.store');
Route::get('/users/{id}/edit', [UserCrudController::class, 'editUser'])->name('users.editUser');
Route::delete('/users/{id}/delete', [UserCrudController::class, 'deleteUser'])->name('users.deleteUser');
Route::put('/users/{id}', [UserCrudController::class, 'updateUser'])->name('users.updateUser');


Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::post('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');


//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});