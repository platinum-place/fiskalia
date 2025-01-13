<?php

namespace App\Providers;

use App\Services\DgiiRequestService;
use App\Services\DgiiRequestServiceInterface;
use App\Services\SequenceService;
use App\Services\SequenceServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected array $services = [
        SequenceServiceInterface::class => SequenceService::class,
        DgiiRequestServiceInterface::class => DgiiRequestService::class,
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
