<?php

namespace Influence360\Product\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Product\Models\Product::class,
        \Influence360\Product\Models\ProductInventory::class,
    ];
}
