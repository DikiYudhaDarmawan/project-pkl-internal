<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class FrontController extends Controller
{
       public function index(){
        $produks = Produk::all();
        return view('index', compact('produks'));
    }
          public function show($id)
    {
        $produks = Produk::findOrFail($id);
        return view('shopdetail', compact('produks'));

    }


}
