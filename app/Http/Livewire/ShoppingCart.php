<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Livewire\Component;

class ShoppingCart extends Component
{
    public $showDiv = false;

    protected $listeners = ['postAdded' => 'openDiv'];

    // change shopping cart visibility status
    public function openDiv()
    {
        $this->showDiv = !$this->showDiv;
    }

    public function render()
    {
        return view('livewire.shopping-cart', [
            "cartItems" => Cart::content(),
        ]);
    }

    public function storeCart(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        Cart::add($product->id, $product->name, 1, $product->price, 500);

        return redirect()
            ->route("home")
            ->with("message", "Product added to Cart Succesfully!");
    }

    public function showAlert()
    {
        dd("anan anan");
    }
}
