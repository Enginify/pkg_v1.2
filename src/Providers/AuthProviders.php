<?php

namespace Label\Phplvl\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Label\Phplvl\Http\Middleware\AuthSession;
use Illuminate\Support\Facades\App;

class AuthProviders extends ServiceProvider
{
    public function boot(Router $router): void
    {
        $this->app['router']->pushMiddlewareToGroup('web', AuthSession::class);
        $this->app['router']->pushMiddlewareToGroup('api', AuthSession::class);

        $this->app->register(AuthProviders::class);
    }

    public function register(): void
    {

    }
}
