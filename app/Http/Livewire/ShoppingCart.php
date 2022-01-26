<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Livewire\Component;

class ShoppingCart extends Component
{
    public $showDiv = false;

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

    public function cartItemQty($val)
    {
        //Cart::update($rowId, 5);
        dd($val);
        return redirect()->route("home");
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
