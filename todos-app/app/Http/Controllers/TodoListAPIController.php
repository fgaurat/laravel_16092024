<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoListResource;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Log;

class TodoListAPIController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TodoListResource::collection(TodoList::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =$request->validate([
            "name"=>"required"
        ]);
        Log::info($validatedData);
        $todoList = TodoList::create($validatedData);

        return new TodoListResource($todoList);

    }

    /**
     * Display the specified resource.
     */
    public function show(TodoList $todolist)
    {
        return new TodoListResource($todolist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
