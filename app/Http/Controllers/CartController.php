<?php

namespace App\Http\Controllers;

use App\Mail\CartMail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function showCart(Request $request)
    {
        $prod_ids = $request->session()->get('cart');

        $products = Product::select('id', 'name', 'price', 'img')
        ->whereIn('id', $prod_ids)
        ->get();

        return view('cart.show', [
            'products' => $products
        ]);
    }

    public function addToCart($id, Request $request)
    {
        $request->session()->push('cart', $id);

        return back();
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
        ]);

        Mail::to($request->email)->send(new CartMail($request->name));

        return redirect( route('index') );
    }
}
