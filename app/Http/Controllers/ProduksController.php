<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class produksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $produks = Produk::all();
        confirmDelete('Delete', 'yakin?');
        return view('admin.produk.index', compact('produks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();

        return view('admin.produk.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produks = new produk;
        $produks->nama_produk = $request->nama_produk;
        $produks->deskripsi = $request->deskripsi;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->kategori_id = $request->kategori_id;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('image/produk', $name);
            $produks->cover = $name;
        }

        Alert::success('success', "data berhasil ditambah")->autoClose(1000);
        $produks->save();
        return redirect()->route('produk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = produk::findOrFail($id);
        $kategoris = Kategori::all();


        return view('admin.produk.edit', compact('produks','kategoris'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produks = produk::findOrFail($id);
        $produks->nama_produk = $request->nama_produk;
        $produks->deskripsi = $request->deskripsi;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->kategori_id = $request->kategori_id;
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('image/produk', $name);
            $produks->cover = $name;
        }

        $produks->save();
        Alert::success('success', "data berhasil diubah")->autoClose(1000);

        return redirect()->route('produk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = produk::findOrFail($id);
        $produks->delete();
        Alert::success('success', "data berhasil dihapus")->autoClose(1000);
        return redirect()->route('produk.index');

    }
}
