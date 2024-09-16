<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello/{name}', function ($name) { // injection de dépendance

//     // return view('hello'); // resource/views/hello.blade.php
// });

Route::get('/hello/show', [HelloController::class,'show'])->name("hello_show");
Route::get('/hello/show2', [HelloController::class,'show2'])->name("hello_show");
Route::get('/hello/{name}', [HelloController::class,'index'])->name("hello_index");
