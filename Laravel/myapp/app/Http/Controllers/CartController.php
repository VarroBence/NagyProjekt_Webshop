<?php

namespace App\Http\Controllers;
use Jackiedo\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }
}
