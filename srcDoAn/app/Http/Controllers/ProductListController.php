<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        $sanPhams = SanPham::paginate(0);
        return view('page.ProductList', compact('sanPhams'));
    }
    

}
