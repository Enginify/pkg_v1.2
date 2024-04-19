<?php

namespace Larvel\Phplvl\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Larvel\Phplvl\Http\Middleware\AuthSession;

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
