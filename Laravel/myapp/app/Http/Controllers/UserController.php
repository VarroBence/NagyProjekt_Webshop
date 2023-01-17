<?php

namespace App\Http\Controllers;

use App\Models\Order;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($user)
    {
        $user = \App\Models\User::find($user);
        return view('user', [
            'user' => $user
        ]);
    }

    public function orders_show($id)
    {
        $orders = Order::all()->where('user_id', '=', $id);
        return $orders;
    }
}
