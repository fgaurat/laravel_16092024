@extends('layouts.app')


@section('title', 'Todolist')


@section('content')
<h1>{{$todolist->name}}</h1>


@foreach ($todolist->todos as $todo)
<ul>
    <li>
        {{$todo->id}}, {{$todo->title}}, {{$todo->completed}}
        <ul>
            @foreach($todo->tags as $tag)
            <li>{{$tag->name}}</li>
            @endforeach
        </ul>
    </li>
</ul>

@endforeach

@endsection
