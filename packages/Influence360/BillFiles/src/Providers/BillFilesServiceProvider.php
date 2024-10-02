<?php

namespace Influence360\BillFiles\Providers;

use Illuminate\Support\ServiceProvider;

class BillFilesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register BillFiles views
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'BillFiles');

        // Log to ensure this is being called
        \Log::info('BillFiles views registered');
    }

    public function register()
    {
        //
    }
}
