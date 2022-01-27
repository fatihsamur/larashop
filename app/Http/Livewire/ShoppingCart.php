<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Livewire\Component;

class ShoppingCart extends Component
{
    public $showDiv = false;
    public $itemQty = 1;

    protected $listeners = [
        'postAdded' => 'openDiv',
        'bokAlert(x)' => 'cartItemQty(i)',
    ];

    // change shopping cart visibility status
    public function openDiv()
    {
        $this->showDiv = !$this->showDiv;
    }

    public function closeDiv()
    {
        $this->showDiv = !$this->showDiv;
        return redirect()->route("home");
    }

    // get content of the cart
    public function render()
    {
        return view('livewire.shopping-cart', [
            "cartItems" => Cart::content(),
        ]);
    }

    // add item to cart
    public function storeCart(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        Cart::add($product->id, $product->name, 1, $product->price, 500);

        return redirect()
            ->route("home")
            ->with("message", "Product added to Cart Succesfully!");
    }

    public function cartItemQtyUp($val)
    {
        $cartItem = Cart::get($val);
        $cartItem->qty = $cartItem->qty + 1;
        Cart::update($val, $cartItem->qty);
    }

    public function cartItemQtyDown($val)
    {
        $cartItem = Cart::get($val);
        $cartItem->qty = $cartItem->qty - 1;
        Cart::update($val, $cartItem->qty);
    }

    // remove item from cart
    public function cartItemRmv($rowId)
    {
        Cart::remove($rowId);
    }

    public function alert()
    {
        dd("bok ye");
    }
}
