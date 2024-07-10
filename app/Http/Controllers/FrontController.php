<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class FrontController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('index', compact('produks'));
    }
    public function show($id)
    {
        $produks = Produk::findOrFail($id);
        return view('shopdetail', compact('produks'));
    }
    public function cartpage()
    {
        return view('cartpage');
    }
    public function checkout()
    {
        return view('checkout');
    }
    

}
