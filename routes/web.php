<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/heloo', function () {
    return response('<h2>welcome hellooo</h2>')
        ->header('Content-Type', 'text/plain');
});

Route::get('/user/{id}', function ($id) {
    return response("<h2>welcome! your id is: $id </h2>");
})->where('id', '[0-9]+');

Route::get('/user', function (Request $request) {
    return response("<h2> $request->name: $request->age </h2>");
});

// Show home page
Route::get('/', [ListingController::class, 'index']);

//Show a single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/create user form
Route::get('/register', [UserController::class, 'create']);

//create new users
Route::post('/users', [UserController::class, 'store']);

//Log users out
Route::post('/logout', [UserController::class, 'logout']);

//Show Login form
Route::get('/login', [UserController::class, 'login']);

//Log users in
Route::post('/signin', [UserController::class, 'signin']);
