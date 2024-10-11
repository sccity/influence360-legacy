<?php

namespace Influence360\BillFiles\Providers;

use Illuminate\Support\ServiceProvider;

class BillFilesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(ModuleServiceProvider::class);
    }
}
