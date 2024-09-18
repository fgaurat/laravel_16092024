<?php

namespace App\Http\Controllers;

use App\Interfaces\TodoListRepositoryInterface;
use App\Models\TodoList;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TodoListRepositoryInterface $repo)
    {
        // if (! Gate::allows('show-todolist')) {
        //     abort(403);
        // }
        // $all = TodoList::withCount('todos')->get();

        // Gate::authorize('viewAny',TodoList::class);

        $all = $repo->findAll();

        return view("todolist.index",["todolists"=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TodoList $todolist)
    {
        return view('todolist.show',['todolist'=>$todolist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TodoList $todoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TodoList $todoList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoList $todoList)
    {
        //
    }
}
