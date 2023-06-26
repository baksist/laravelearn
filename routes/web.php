<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// get all listings 
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// get single listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'heading' => 'Listing #' . $id,
        'listing' => Listing::find($id)
    ]);
})->where('id', '[0-9]+');


// Route::get('/hello', function () {
//     return response("Hello world", 200) 
//         -> header('Content-Type', 'text/plain'); // set header for response
// });

// Route::get('/posts/{id}', function ($id) {
//     # ddd($id); // dump die debug
//     return response('Post ' . $id, 200) 
//         -> header('Content-Type', 'text/plain');
// })->where('id', '[0-9]+'); // filter parameter, return 404 on error

// Route::get('/search', function (Request $request) {
//     return($request->x . ' ' . $request->y); // get values from URL parameters
// });