<?php

namespace Influence360\User\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\User\Models\Group::class,
        \Influence360\User\Models\Role::class,
        \Influence360\User\Models\User::class,
    ];
}
