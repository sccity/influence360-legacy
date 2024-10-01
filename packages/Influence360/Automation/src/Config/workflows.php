<?php

return [
    'trigger_entities' => [

        'initiatives' => [
            'name'   => 'Initiatives',
            'class'  => 'Influence360\Automation\Helpers\Entity\Initiative',
            'events' => [
                [
                    'event' => 'initiative.create.after',
                    'name'  => 'Created',
                ], [
                    'event' => 'initiative.update.after',
                    'name'  => 'Updated',
                ], [
                    'event' => 'initiative.delete.before',
                    'name'  => 'Deleted',
                ],
            ],
        ],

        'activities' => [
            'name'   => 'Activities',
            'class'  => 'Influence360\Automation\Helpers\Entity\Activity',
            'events' => [
                [
                    'event' => 'activity.create.after',
                    'name'  => 'Created',
                ], [
                    'event' => 'activity.update.after',
                    'name'  => 'Updated',
                ], [
                    'event' => 'activity.delete.before',
                    'name'  => 'Deleted',
                ],
            ],
        ],

        'persons' => [
            'name'   => 'Persons',
            'class'  => 'Influence360\Automation\Helpers\Entity\Person',
            'events' => [
                [
                    'event' => 'contacts.person.create.after',
                    'name'  => 'Created',
                ], [
                    'event' => 'contacts.person.update.after',
                    'name'  => 'Updated',
                ], [
                    'event' => 'contacts.person.delete.before',
                    'name'  => 'Deleted',
                ],
            ],
        ],
    ],
];
