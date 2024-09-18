<?php

namespace App\Listeners;

use App\Events\NewTodo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class NewTodoListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewTodo $event): void
    {
        $todo = $event->todo;
        Log::info("Todo Created :".$todo->id." ".$todo->title);
    }
}
