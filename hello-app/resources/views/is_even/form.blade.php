@extends('layouts.layout')

@section('title','Le formulaire')

@section('content')
    <form action="{{route('is_even.calc')}}" method="POST">
        @csrf
        <input type="text" value="" placeholder="Integer value ..." name="numberValue">
        <button class="btn btn-primary" type="submit">Even ?</button>
    </form>
@endsection
