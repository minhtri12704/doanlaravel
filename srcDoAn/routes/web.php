<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCrudController;
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

//route do an
Route::get('/users', [UserCrudController::class, 'index'])->name('users.index');
Route::get('UserCreate', [UserCrudController::class, 'create'])->name('users.UserCreate');
Route::post('users', [UserCrudController::class, 'postUser'])->name('users.store');
Route::get('/users/{id}/edit', [UserCrudController::class, 'editUser'])->name('users.editUser');
Route::delete('/users/{id}/delete', [UserCrudController::class, 'deleteUser'])->name('users.deleteUser');
Route::put('/users/{id}', [UserCrudController::class, 'updateUser'])->name('users.updateUser');


//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});