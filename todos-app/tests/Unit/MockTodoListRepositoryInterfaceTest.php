<?php

use App\Interfaces\TodoListRepositoryInterface;

test('test TodoListRepositoryInterface', function () {
    $values = ["value 01","value 02","value 03","value 04"];
    $repo = Mockery::mock(TodoListRepositoryInterface::class);
    $repo->shouldReceive('findAll')->once()->andReturn($values);

    $result =$repo->findAll();
    expect($result)->toEqual($values);
});
