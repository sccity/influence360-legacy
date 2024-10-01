<?php

namespace Influence360\DataGrid\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\DataGrid\Models\SavedFilter::class,
    ];
}
