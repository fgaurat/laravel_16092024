<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TodoList::factory(3)->create();
        $todoList = TodoList::all();
        $todoList->each(function($list){
            Todo::factory(5)->create(['todo_list_id'=>$list->id]);
        });
    }
}
