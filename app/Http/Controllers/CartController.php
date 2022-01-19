<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function storeCart(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        Cart::add($product->id, $product->name, 1, $product->price, 500);
        $cartItems = Cart::content();

        dd($cartItems);

        return redirect()
            ->route("home")
            ->with("message", "Product added to Cart Succesfully!");
    }
}
