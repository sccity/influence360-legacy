<?php

namespace Influence360\Admin\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'contacts.person.create.after' => [
            'Influence360\Admin\Listeners\Person@linkToEmail',
        ],

        'initiative.create.after' => [
            'Influence360\Admin\Listeners\Initiative@linkToEmail',
        ],

        'activity.create.after' => [
            'Influence360\Admin\Listeners\Activity@afterUpdateOrCreate',
        ],

        'activity.update.after' => [
            'Influence360\Admin\Listeners\Activity@afterUpdateOrCreate',
        ],
    ];
}
