<?php

namespace HumbleDrawerComponent;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function register(): void
    {
        $this->loadViewsFrom(__DIR__.'/resources', 'drawer');
    }

    public function boot(): void
    {
    }
}
