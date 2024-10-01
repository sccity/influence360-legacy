<?php

namespace Influence360\EmailTemplate\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\EmailTemplate\Models\EmailTemplate::class,
    ];
}
