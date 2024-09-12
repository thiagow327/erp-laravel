<?php

namespace App\Providers;

use App\Models\Client;
use App\Policies\ClientPolicy;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\ClientRepository;
use App\Services\ClientService;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Client::class => ClientPolicy::class,
    ];

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
                $app->make(RepositoryInterface::class)
            );
        });
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
