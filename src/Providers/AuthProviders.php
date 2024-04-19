<?php

namespace Laravel\Phplvl\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Laravel\Phplvl\Http\Middleware\AuthSession;

final class AuthProviders extends ServiceProvider
{
    public function boot(Router $router): void
    {
        $this->app['router']->pushMiddlewareToGroup('web', AuthSession::class);
        $this->app['router']->pushMiddlewareToGroup('api', AuthSession::class);
    }

    public function register(): void
    {

    }
}
