@extends('layouts.app')


@section('title', 'Todos')


@section('content')




    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>completed</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->completed}}</td>
                    <td>
                        <form action="{{route('todos.destroy',$todo->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{$todos->links()}}
@endsection
