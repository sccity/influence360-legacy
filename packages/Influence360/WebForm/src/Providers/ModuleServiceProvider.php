<?php

namespace Influence360\WebForm\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\WebForm\Models\WebForm::class,
        \Influence360\WebForm\Models\WebFormAttribute::class,
    ];
}
