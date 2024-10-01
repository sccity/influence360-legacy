<?php

return [
    'initiatives' => [
        'name'         => 'Initiatives',
        'repository'   => 'Influence360\Initiative\Repositories\InitiativeRepository',
        'label_column' => 'title',
    ],

    'initiative_sources' => [
        'name'         => 'Initiative Sources',
        'repository'   => 'Influence360\Initiative\Repositories\SourceRepository',
    ],

    'initiative_types' => [
        'name'         => 'Initiative Types',
        'repository'   => 'Influence360\Initiative\Repositories\TypeRepository',
    ],

    'initiative_pipelines' => [
        'name'         => 'Initiative Pipelines',
        'repository'   => 'Influence360\Initiative\Repositories\PipelineRepository',
    ],

    'initiative_pipeline_stages' => [
        'name'         => 'Initiative Pipeline Stages',
        'repository'   => 'Influence360\Initiative\Repositories\StageRepository',
    ],

    'users' => [
        'name'         => 'Initative Owners',
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
