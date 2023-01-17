<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Listing;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;

class ListingController extends Controller
{
    //show all listings
    public function index()
    {
        //dd(request('tag'));
        return view('listings.index', [
            //'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form
    public function create()
    {
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request)
    {
        //dd($request -> all());
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'price' => 'required',
            'logo' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logo', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created succesfully!');
    }

    //Show edit form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update listing data
    public function update(Request $request, Listing $listing)
    {

        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logo', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated succesfully!');
    }

    //Delete Listing
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully!');
    }

    //Order data
    public function make_order(Request $request)
    {
        $items = Cart::name('shopping')->getItems();
        foreach ($items as $item)
        {
            $listing = $item->getModel();
            //$user_id = User::name('user')->getItems('user_id');

            $order = new Order;
            $order->name=$request->name;
            $order->email=$request->email;
            $order->phone=$request->phone;
            $order->post_code=$request->post_code;
            $order->city=$request->city;
            $order->title=$listing->title;
            $order->logo=$listing->logo;
            $order->price=$listing->price;
            $order->adress=$request->adress;
           // $order->user_id=$listing->$user_id;
            $order->save();
        }
        return redirect("/")->with('message', 'Order placed succesfully!');


    }

    //Show placed orders page
    public function orders_show()
    {
        $orders = Order::all();
        return view('orders', ['orders' => $orders]);
    }


}
