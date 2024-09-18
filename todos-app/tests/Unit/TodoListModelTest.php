<?php
use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabaseState;

uses(RefreshDatabaseState::class);


test('test if TodoListModel work', function () {
    // Act
    $todoList = TodoList::factory()->create();
    $todo = Todo::factory()->create(['todo_list_id'=>$todoList->id]);
    expect($todoList)->toBeObject();
});
