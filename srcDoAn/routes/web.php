<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;


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




Route::get('/payment', [PaymentController::class, 'showForm'])->name('payment.form');
Route::post('/payment', [PaymentController::class, 'process'])->name('payment.process');


Route::get('/users', [UserController::class, 'showUsers'])->name('users.showUsers');

Route::get('/', function () {
    return view('welcome');
});
