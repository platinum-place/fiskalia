<?php

namespace DGII\API;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/dgii.php', 'dgii'
        );
    }
}
