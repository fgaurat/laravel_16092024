@extends('layouts.app')


@section('title', 'Add Todos')


@section('content')




<form action="{{route('todos.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="todoTitle" class="form-label">Todo Title</label>
      <input type="text" class="form-control" name="todoTitle" id="todoTitle" aria-describedby="todoTitleHelp">
      <div id="todoTitleHelp" class="form-text">Todo title</div>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="todoCompleted" id="todoCompleted">
      <label class="form-check-label" for="todoCompleted">Completed ?</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
