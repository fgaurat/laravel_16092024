<?php

namespace App\Http\Controllers;

use App\Events\NewTodo;
use App\Http\Requests\StoreTodoRequest;
use App\Jobs\SendMailJob;
use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Paginator::useBootstrap();
        //
        // $todos = Todo::all();
        $todos = DB::table('todos')->paginate(15);
        return view('todos.index',['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all = TodoList::all();
        return view('todos.create',["todoList"=>$all]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {
        $validated = $request->validated();

        $todo = Todo::create([
            "title"=>$validated['todoTitle'],
            "completed"=>$validated['todoCompleted'],
            "todo_list_id"=>$request->todo_list_id
        ]);

        //event
        NewTodo::dispatch($todo);
        SendMailJob::dispatch();

        return redirect()->route('todos.index')->with('status','Todo created !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('status','Todo Delete !');
    }
}
