<?php

namespace Influence360\Initiative\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Initiative\Models\Initiative::class,
        \Influence360\Initiative\Models\Pipeline::class,
        \Influence360\Initiative\Models\Source::class,
        \Influence360\Initiative\Models\Stage::class,
        \Influence360\Initiative\Models\Type::class,
    ];
}
