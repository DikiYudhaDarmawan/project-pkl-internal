<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $request->validate([
            'qty' => 'required|integer|min:1',
        ]);

        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->back()->with('error', 'Produk not found!');
        }

        $qty = $request->input('qty', 1);

        $cart = Cart::where('user_id', Auth::id())->where('produk_id', $id)->first();

        if ($cart) {
            $cart->qty += $qty;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'produk_id' => $id,
                'qty' => $qty,
            ]);
        }

        return redirect()->back()->with('success', 'Produk added to cart!');
    }

    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('produk')->get();
        $subTotal = 0;
        

        foreach ($cartItems as $item) {
            $item->sub_total = $item->qty * $item->produk->harga;
            $subTotal += $item->sub_total;
        }
        $total = $cartItems->sum('sub_total');

        // $total = $subTotal; // Assuming no additional fees or taxes

        return view('cartpage', compact('cartItems', 'subTotal', 'total'));
        
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();

        if ($cart) {
            if ($request->qty == 0) {
                $cart->delete();
                return redirect()->back()->with('success', 'Cart item removed successfully!');
            } else {
                $cart->qty = $request->qty;
                $cart->save();
                return redirect()->back()->with('success', 'Cart updated successfully!');
            }
        }

        return redirect()->back()->with('error', 'Cart item not found!');
    }
    public function delete($id)
    {
      $cart = Cart::where('id_user', Auth::id())->where('id', $id)->first();

if ($cart) {
    $cart->delete();
    return redirect()->back()->with('success', 'Cart item removed successfully!');
}

return redirect()->back()->with('error', 'Cart item not found!');

    }

    public function clear()
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'All cart items removed successfully!');
    }
}
