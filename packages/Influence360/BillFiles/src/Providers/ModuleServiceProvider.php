<?php

namespace Influence360\BillFiles\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\BillFiles\Contracts\BillFile::class => \Influence360\BillFiles\Models\BillFile::class,
    ];
}
