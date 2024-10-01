<?php

namespace Influence360\Attribute\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Attribute\Models\Attribute::class,
        \Influence360\Attribute\Models\AttributeOption::class,
        \Influence360\Attribute\Models\AttributeValue::class,
    ];
}
