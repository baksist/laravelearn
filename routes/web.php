<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Elit mollit aliquip esse qui fugiat. Qui aliqua duis proident elit incididunt ut ipsum labore nisi. Fugiat pariatur ad pariatur veniam quis duis deserunt amet incididunt Lorem adipisicing incididunt ea velit. Tempor dolore occaecat amet quis reprehenderit dolor.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Elit mollit aliquip esse qui fugiat. Qui aliqua duis proident elit incididunt ut ipsum labore nisi. Fugiat pariatur ad pariatur veniam quis duis deserunt amet incididunt Lorem adipisicing incididunt ea velit. Tempor dolore occaecat amet quis reprehenderit dolor.'
            ]
        ]
    ]);
});

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