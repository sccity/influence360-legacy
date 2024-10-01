<?php

namespace Influence360\Email\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Email\Models\Email::class,
        \Influence360\Email\Models\Attachment::class,
    ];
}
