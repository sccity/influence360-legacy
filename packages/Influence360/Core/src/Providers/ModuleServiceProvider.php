<?php

namespace Influence360\Core\Providers;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Core\Models\CoreConfig::class,
        \Influence360\Core\Models\Country::class,
        \Influence360\Core\Models\CountryState::class,
    ];
}
