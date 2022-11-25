<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//All listings
Route::get('/', [ListingController::class, 'index']);


//Single listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);

//User
Route::get('/user/{user}', [App\Http\Controllers\UserController::class, 'index'])->name('user.show');

//Cart
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
