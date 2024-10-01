<?php

return [
    'leads' => [
        'name'         => 'Leads',
        'repository'   => 'Influence360\Lead\Repositories\LeadRepository',
        'label_column' => 'title',
    ],

    'lead_sources' => [
        'name'         => 'Lead Sources',
        'repository'   => 'Influence360\Lead\Repositories\SourceRepository',
    ],

    'lead_types' => [
        'name'         => 'Lead Types',
        'repository'   => 'Influence360\Lead\Repositories\TypeRepository',
    ],

    'lead_pipelines' => [
        'name'         => 'Lead Pipelines',
        'repository'   => 'Influence360\Lead\Repositories\PipelineRepository',
    ],

    'lead_pipeline_stages' => [
        'name'         => 'Lead Pipeline Stages',
        'repository'   => 'Influence360\Lead\Repositories\StageRepository',
    ],

    'users' => [
        'name'         => 'Sales Owners',
        'repository'   => 'Influence360\User\Repositories\UserRepository',
    ],

    'organizations' => [
        'name'         => 'Organizations',
        'repository'   => 'Influence360\Contact\Repositories\OrganizationRepository',
    ],

    'persons' => [
        'name'         => 'Persons',
        'repository'   => 'Influence360\Contact\Repositories\PersonRepository',
    ],

    'warehouses' => [
        'name'         => 'Warehouses',
        'repository'   => 'Influence360\Warehouse\Repositories\WarehouseRepository',
    ],

    'locations' => [
        'name'         => 'Locations',
        'repository'   => 'Influence360\Warehouse\Repositories\LocationRepository',
    ],
];
