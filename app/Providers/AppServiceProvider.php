<?php

namespace App\Providers;
use  Illuminate\pagination\paginationstate;
use Illuminate\Support\ServiceProvider;
use  Illuminate\pagination\paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        paginator::useBootstrapFive();
    }
}
