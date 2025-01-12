<?php

namespace App\Providers;

use App\Services\SequenceService;
use Illuminate\Support\ServiceProvider;
use App\Services\SequenceServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    protected array $services = [
        SequenceServiceInterface::class => SequenceService::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->services as $interface => $class) {
            $this->app->bind($interface, $class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
