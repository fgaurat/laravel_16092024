<?php

use App\Models\TodoList;


test('todolist respond 200', function () {
    $response = $this->get('/todolist');

    $response->assertStatus(200);
});

test('todolist should show 3 items', function () {
    $todoList = TodoList::factory()->count(3)->create();
    $response = $this->get('/todolist');

    $response->assertSee('<table class="table">', false);

    foreach ($todoList as $item) {
        $response->assertSee($item->name, false);
    }

    $tableRows = substr_count($response->getContent(), '<tr>') - 1;
    expect($tableRows)->toBe(3);


});
