<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function showUsers()
    {
        $users = User::all(); // hoặc bất cứ dữ liệu gì bạn cần
        return view('users.index', compact('users'));
    }
    

}