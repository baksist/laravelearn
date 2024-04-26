<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // show all listings
    public function index(){
        
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // show single listings
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}