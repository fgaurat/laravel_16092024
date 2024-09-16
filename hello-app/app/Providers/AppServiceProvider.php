<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\HelloDep;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(HelloDep::class, fn() => new HelloDep("Fred"));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
