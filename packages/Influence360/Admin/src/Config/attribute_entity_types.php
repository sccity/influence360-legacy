<?php

return [
    'leads'         => [
        'name'       => 'admin::app.leads.index.title',
        'repository' => 'Influence360\Lead\Repositories\LeadRepository',
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
