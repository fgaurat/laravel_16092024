<?php

namespace App\Console\Commands;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ScrapeTodos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ors:scrape-todos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrap todos from https://jsonplaceholder.typicode.com/todos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Scraping todos...");
        $url_todos = "https://jsonplaceholder.typicode.com/todos";
        $response = Http::get($url_todos);
        $todos = $response->json();
        $todos_collection = collect($todos)->map(function($todo){
            return[
                "title"=>$todo['title'],
                "completed"=>$todo['completed'],
                "created_at"=>now(),
                "updated_at"=>now()
            ];
        })->toArray();

        // $this->info($todos[0]['title']);
        // $this->info($todos_collection);
        Todo::insert($todos_collection);
    }
}
