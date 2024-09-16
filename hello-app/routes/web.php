<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello/{name}', function ($name) { // injection de dépendance

//     // return view('hello'); // resource/views/hello.blade.php
// });

Route::get('/hello/{name}', [HelloController::class,'index'])->name("la route hello");
