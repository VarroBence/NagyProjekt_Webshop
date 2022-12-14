<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

//Store Listing Data

Route::post('/listings', [ListingController::class, 'store']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Order
Route::post('/cart', [ListingController::class, 'make_order']);

//Placed orders
Route::get('/orders', [ListingController::class, 'orders_show']);

//User
Route::get('/user/{user}', [App\Http\Controllers\UserController::class, 'index'])->name('user.show');

//Cart view
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart');

//Add item to cart
Route::post('/listings/{listing}/cart', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.store');

//Remove item from cart
Route::post('/cart/{i}', [\App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Single listing (Ennek mindenképpen a legalul kell lenni, különben nem lehet majd elérni a get ből az url ben!!!!)

Route::get('/listings/{listing}', [ListingController::class, 'show']);
