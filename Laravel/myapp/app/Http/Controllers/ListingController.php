<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index() 
    {
        //dd(request('tag'));
        return view('listings.index', [
            //'heading' => 'Latest Listings',
            'listings' => Listing::latest() ->filter(request(['tag', 'search'])) -> paginate(6)
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
        $formFields = $request->validate(['title' => 'required',
                                            'tags' => 'required',
                                            'price' => 'required',
                                            'logo' => 'required',
                                            'description' => 'required']);

        if($request->hasFile('logo')) 
        {
            $formFields['logo'] = $request->file('logo')->store('logo', 'public');
        }

        Listing::create($formFields);

         return redirect('/')->with('message', 'Listing created succesfully!');

    }

    //Show edit form
    public function edit(Listing $listing) 
    {
        return view('lisstings.edit', ['listing' => $listing] );
    }

}
