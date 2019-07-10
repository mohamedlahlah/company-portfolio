<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\view\Composers\mainComposers;
use App\Feature;

class ComposerServiceProvider extends ServiceProvider
{/**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('layouts.main',mainComposers::class) ;
        //
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    
}
