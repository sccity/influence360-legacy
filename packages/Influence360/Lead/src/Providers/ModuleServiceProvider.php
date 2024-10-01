<?php

namespace Influence360\Lead\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Lead\Models\Lead::class,
        \Influence360\Lead\Models\Pipeline::class,
        \Influence360\Lead\Models\Product::class,
        \Influence360\Lead\Models\Source::class,
        \Influence360\Lead\Models\Stage::class,
        \Influence360\Lead\Models\Type::class,
    ];
}
