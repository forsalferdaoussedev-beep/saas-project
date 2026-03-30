<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // We'll bind repositories here as we build each domain
        // Example:
        // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}