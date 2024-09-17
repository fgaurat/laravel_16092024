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
                </tr>
            @endforeach
        </tbody>

    </table>
    {{$todos->links()}}
@endsection
