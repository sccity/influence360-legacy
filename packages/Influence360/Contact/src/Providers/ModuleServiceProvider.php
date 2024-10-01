<?php

namespace Influence360\Contact\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Contact\Models\Person::class,
        \Influence360\Contact\Models\Organization::class,
    ];
}
