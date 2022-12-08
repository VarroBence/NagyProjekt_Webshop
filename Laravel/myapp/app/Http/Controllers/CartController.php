<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Jackiedo\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function add(Listing $listing){
        $cart = new Cart();
        $cartItem = $cart -> name('shopping')->addItem([
            'model' => $listing
        ]);
        return back();
    }

}
