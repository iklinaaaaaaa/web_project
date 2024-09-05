<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
{
    $cart = Cart::all();
    return view('cart.index', compact('cart'));
}

public function store(Request $request)
{
    $product = product::find($request->input('product_id'));
    if (!$product) {
        return back()->withErrors(['Product not found']);
    }
    $cart = Cart::create([
        'product_id' => $product->id,
        'quantity' => $request->input('quantity'),
    ]);
    return redirect()->route('cart.index');
}

public function destroy($id)
{
    $cart = Cart::find($id);
    if (!$cart) {
        return back()->withErrors(['Cart item not found']);
    }
    $cart->delete();
    return redirect()->route('cart.index');
}
}
