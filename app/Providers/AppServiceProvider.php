<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\ClientRepository;
use App\Services\ClientService;
use App\Validators\ClientValidator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            RepositoryInterface::class,
            ClientRepository::class
        );

        $this->app->singleton(ClientService::class, function ($app) {
            return new ClientService(
                $app->make(RepositoryInterface::class),
                $app->make(ClientValidator::class)
            );
        });
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
