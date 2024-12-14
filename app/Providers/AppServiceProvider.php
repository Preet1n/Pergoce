<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Dotenv\Dotenv;

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
        Blade::component('layouts.financas', 'financas-layout');

        if (file_exists(base_path('.env'))) {
            $dotenv = Dotenv::createImmutable(base_path());
            $dotenv->load();
        }
    }
}
