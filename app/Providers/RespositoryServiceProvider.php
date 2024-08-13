<?php

namespace App\Providers;

use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class RespositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
