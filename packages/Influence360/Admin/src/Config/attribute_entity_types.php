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

    'bill_files' => [
        'name'       => 'admin::app.bill-files.index.title',
        'repository' => 'Influence360\BillFiles\Repositories\BillFileRepository',
    ],
];
