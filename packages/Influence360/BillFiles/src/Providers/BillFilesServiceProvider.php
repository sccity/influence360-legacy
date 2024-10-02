<?php

namespace Influence360\BillFiles\Providers;

use Illuminate\Support\ServiceProvider;

class BillFilesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    public function register()
    {
        //
    }
}
