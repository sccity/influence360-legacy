<?php

namespace Influence360\Core\Facades;

use Illuminate\Support\Facades\Facade;

class SystemConfig extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'system_config';
    }
}
