<?php

namespace Wowpack\LaravelMPdf;

use Illuminate\Support\ServiceProvider;

class MPdfServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->make(MPdfWrapper::class);
    }

    public function boot(): void
    {
    }
}
