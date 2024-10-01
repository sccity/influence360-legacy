<?php

return [
    'modules' => [
        \Influence360\Activity\Providers\ModuleServiceProvider::class,
        \Influence360\Admin\Providers\ModuleServiceProvider::class,
        \Influence360\Attribute\Providers\ModuleServiceProvider::class,
        \Influence360\Automation\Providers\ModuleServiceProvider::class,
        \Influence360\Contact\Providers\ModuleServiceProvider::class,
        \Influence360\Core\Providers\ModuleServiceProvider::class,
        \Influence360\DataGrid\Providers\ModuleServiceProvider::class,
        \Influence360\EmailTemplate\Providers\ModuleServiceProvider::class,
        \Influence360\Email\Providers\ModuleServiceProvider::class,
        \Influence360\Initiative\Providers\ModuleServiceProvider::class,
        \Influence360\Product\Providers\ModuleServiceProvider::class,
        \Influence360\Quote\Providers\ModuleServiceProvider::class,
        \Influence360\Tag\Providers\ModuleServiceProvider::class,
        \Influence360\User\Providers\ModuleServiceProvider::class,
        \Influence360\Warehouse\Providers\ModuleServiceProvider::class,
        \Influence360\WebForm\Providers\ModuleServiceProvider::class,
    ],

    'register_route_models' => true,
];
