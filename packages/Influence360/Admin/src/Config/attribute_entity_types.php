<?php

return [
    'initiatives'         => [
        'name'       => 'admin::app.initiatives.index.title',
        'repository' => 'Influence360\Initiative\Repositories\InitiativeRepository',
    ],

    'persons'       => [
        'name'       => 'admin::app.contacts.persons.index.title',
        'repository' => 'Influence360\Contact\Repositories\PersonRepository',
    ],

    'organizations' => [
        'name'       => 'admin::app.contacts.organizations.index.title',
        'repository' => 'Influence360\Contact\Repositories\OrganizationRepository',
    ],

    'products'      => [
        'name'       => 'admin::app.products.index.title',
        'repository' => 'Influence360\Product\Repositories\ProductRepository',
    ],

    'quotes'      => [
        'name'       => 'admin::app.quotes.index.title',
        'repository' => 'Influence360\Quote\Repositories\QuoteRepository',
    ],

    'warehouses'      => [
        'name'       => 'admin::app.settings.warehouses.index.title',
        'repository' => 'Influence360\Warehouse\Repositories\WarehouseRepository',
    ],
];
