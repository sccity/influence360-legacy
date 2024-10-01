<?php

namespace Influence360\Quote\Providers;

use Influence360\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Influence360\Quote\Models\Quote::class,
        \Influence360\Quote\Models\QuoteItem::class,
    ];
}
