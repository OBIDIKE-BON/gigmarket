<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function() {
    return response()->json([
        'posts' => [
            [
                'title' => 'Google sucks',
                'content' => 'It was good while it lasted',
                'age' => 23
            ]
        ]
    ]);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
