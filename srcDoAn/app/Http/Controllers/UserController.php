<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaymentController extends Controller
{
    public function showUsers()
    {
        $nguoidungs = NguoiDung::all(); // hoặc bất cứ dữ liệu gì bạn cần
        return view('nguoidungs.index', compact('nguoidungs'));
    }
    

}