<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class StripeController extends Controller
{
    //
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        $price = Cart::priceTotal();
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            "amount" => $price * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "This payment is tested purpose only",
        ]);

        Cart::destroy();

        session()->flash('message', 'Payment successful!');

        return redirect()->route('home');
    }
}
