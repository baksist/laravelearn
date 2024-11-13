<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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
Route::get('/', [ListingController::class,'index']);

// store listing data
Route::post('/listings', [ListingController::class,'store']);

// create form
Route::get('/listings/create', [ListingController::class,'create']);

// edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// submit edit
Route::put('listings/{listing}', [ListingController::class, 'update']);

// delete listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

// get single listing
Route::get('/listings/{listing}', [ListingController::class,'show']);

// show registration form
Route::get('/register', [UserController::class, 'create']);

// register user
Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', [UserController::class, 'show_login']);

Route::post('/users/login', [UserController::class, 'login']);

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