<?php

namespace App\Providers;

use App\Repository\Interfaces\IUserRepository;
use App\Repository\UserRepository;
use App\Services\AuthService;
use App\Services\Interfaces\IAuthService;
use App\Services\Interfaces\IUserService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(abstract: IAuthService::class, concrete: AuthService::class);
        $this->app->bind(abstract: IUserRepository::class, concrete: UserRepository::class);
        $this->app->bind(abstract: IUserService::class, concrete: UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(abstract: IAuthService::class, concrete: AuthService::class);
        $this->app->bind(abstract: IUserRepository::class, concrete: UserRepository::class);
        $this->app->bind(abstract: IUserService::class, concrete: UserService::class);
    }
}
