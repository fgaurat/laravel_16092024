<?php

namespace App\Providers;

use App\Interfaces\TodoListRepositoryInterface;
use App\Repositories\TodoListRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    $this->app->bind(TodoListRepositoryInterface::class, TodoListRepository::class);


    }
}
