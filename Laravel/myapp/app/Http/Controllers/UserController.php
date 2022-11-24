<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user)
    {
        $user = \App\Models\User::find($user);

        return view('user', [
            'user' => $user
        ]);
    }
}
