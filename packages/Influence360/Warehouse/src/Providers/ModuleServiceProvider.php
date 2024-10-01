<?php

namespace Influence360\Warehouse\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Warehouse\Models\Location::class,
        \Influence360\Warehouse\Models\Warehouse::class,
    ];
}
