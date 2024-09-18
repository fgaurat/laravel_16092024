<?php

namespace Database\Seeders;

use App\Models\Tag;
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
        Tag::factory(3)->create();

        $todoList = TodoList::all();
        $tags = Tag::all();

        $todoList->each(function($list) use($tags){
            Todo::factory(5)->create(['todo_list_id'=>$list->id])->each(function($todo) use($tags,$list){
                $todo->tags()->attach($tags->random(1,3));
                $list->todos()->save($todo);
            });
        });
    }
}
