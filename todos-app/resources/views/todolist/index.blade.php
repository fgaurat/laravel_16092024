@extends('layouts.app')


@section('title', 'Todolist')


@section('content')
<h1>TodoList</h1>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>Nb Todos</th>
            <th>Nb Completed Todos</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($todolists as $todolist)
            <tr>
                <td>{{$todolist->id}}</td>
                <td>{{$todolist->name}}</td>
                <td>{{$todolist->todos_count}}</td>
                <td>{{$todolist->completedTodos->count()}}</td>
                <td>
                    <a href="{{route('todolist.show',$todolist->id)}}">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>

@endsection
