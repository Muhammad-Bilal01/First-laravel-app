<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// My Custom Route
Route::get('/demo/{name}/{id?}',function($name,$id = null){
    // how to send data on link and get the data  
    $data = compact('name','id');
    return view('demo')->with($data);
});


// use to send data

// Route::post('/post-data',function(){
//     echo "Post Data";
// });

// Route::put();

// Route::patch();

// Route::delete();

// Route::any();

