<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/todos',[TodoController::class,'index'])->name("todos.index");
// Route::get('/todos/{id}',[TodoController::class,'destroy'])->name("todos.destroy");
Route::resource('todos',TodoController::class);
Route::resource('todolist',TodoListController::class);
