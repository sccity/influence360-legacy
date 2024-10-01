<?php

namespace Influence360\Tag\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Tag\Models\Tag::class,
    ];
}
