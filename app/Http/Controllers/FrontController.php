<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Cart;
use Auth;

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

    public function checkout()
    {
        return view('checkout');
    }
    public function about()
    {
        return view('about');
    }
    

}
