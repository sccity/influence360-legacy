<?php

namespace Influence360\Activity\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Activity\Models\Activity::class,
        \Influence360\Activity\Models\File::class,
        \Influence360\Activity\Models\Participant::class,
    ];
}
