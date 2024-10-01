<?php

namespace Influence360\Automation\Providers;

use Influence360\Automation\Models\Webhook;
use Influence360\Automation\Models\Workflow;
use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Define the modals to map with this module.
     *
     * @var array
     */
    protected $models = [
        Workflow::class,
        Webhook::class,
    ];
}
