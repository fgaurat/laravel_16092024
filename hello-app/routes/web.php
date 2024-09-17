<?php

use App\Http\Controllers\EvenController;
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

// Route::get('/is_even',function(){
//     return view('is_even.form');
// })->name('is_even.form');

Route::get('/is_even',fn()=>view('is_even.form'))->name('is_even.form');
Route::post('/calc',[EvenController::class,"calc"])->name('is_even.calc');
Route::get('/odd',fn()=>view('is_even.odd'))->name('is_even.odd');
Route::get('/even',fn()=>view('is_even.even'))->name('is_even.even');
