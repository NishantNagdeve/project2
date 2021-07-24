<?php

namespace App\Providers;
use App\Larademo\Larademo;   // File Location..
use Illuminate\Support\ServiceProvider;

class LarademoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('larademo', function(){
            return new Larademo();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
