<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//AÑADI ESTA LINEA ES PARA LO DEL CRUD CON BOOTSTRAP
use Illuminate\Support\Facades\Schema;

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
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
