<?php

return [
    [
        'key'   => 'dashboard',
        'name'  => 'admin::app.layouts.dashboard',
        'route' => 'admin.dashboard.index',
        'sort'  => 1,
    ],  [
        'key'   => 'initiatives',
        'name'  => 'admin::app.acl.initiatives',
        'route' => 'admin.initiatives.index',
        'sort'  => 2,
    ], [
        'key'   => 'initiatives.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.initiatives.create', 'admin.initiatives.store'],
        'sort'  => 1,
    ], [
        'key'   => 'initiatives.view',
        'name'  => 'admin::app.acl.view',
        'route' => 'admin.initiatives.view',
        'sort'  => 2,
    ], [
        'key'   => 'initiatives.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.initiatives.edit', 'admin.initiatives.update', 'admin.initiatives.mass_update'],
        'sort'  => 3,
    ], [
        'key'   => 'initiatives.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => ['admin.initiatives.delete', 'admin.initiatives.mass_delete'],
        'sort'  => 4,
    ],  [
        'key'   => 'mail',
        'name'  => 'admin::app.acl.mail',
        'route' => 'admin.mail.index',
        'sort'  => 4,
    ], [
        'key'   => 'mail.inbox',
        'name'  => 'admin::app.acl.inbox',
        'route' => 'admin.mail.index',
        'sort'  => 1,
    ], [
        'key'   => 'mail.draft',
        'name'  => 'admin::app.acl.draft',
        'route' => 'admin.mail.index',
        'sort'  => 2,
    ], [
        'key'   => 'mail.outbox',
        'name'  => 'admin::app.acl.outbox',
        'route' => 'admin.mail.index',
        'sort'  => 3,
    ], [
        'key'   => 'mail.sent',
        'name'  => 'admin::app.acl.sent',
        'route' => 'admin.mail.index',
        'sort'  => 4,
    ], [
        'key'   => 'mail.trash',
        'name'  => 'admin::app.acl.trash',
        'route' => 'admin.mail.index',
        'sort'  => 5,
    ], [
        'key'   => 'mail.compose',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.mail.store'],
        'sort'  => 6,
    ], [
        'key'   => 'mail.view',
        'name'  => 'admin::app.acl.view',
        'route' => 'admin.mail.view',
        'sort'  => 7,
    ], [
        'key'   => 'mail.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => 'admin.mail.update',
        'sort'  => 8,
    ], [
        'key'   => 'mail.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => ['admin.mail.delete', 'admin.mail.mass_delete'],
        'sort'  => 9,
    ], [
        'key'   => 'activities',
        'name'  => 'admin::app.acl.activities',
        'route' => 'admin.activities.index',
        'sort'  => 5,
    ], [
        'key'   => 'activities.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.activities.create', 'admin.activities.store'],
        'sort'  => 1,
    ], [
        'key'   => 'activities.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.activities.edit', 'admin.activities.update', 'admin.activities.mass_update'],
        'sort'  => 2,
    ], [
        'key'   => 'activities.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => ['admin.activities.delete', 'admin.activities.mass_delete'],
        'sort'  => 3,
    ], [
        'key'   => 'contacts',
        'name'  => 'admin::app.acl.contacts',
        'route' => 'admin.contacts.users.index',
        'sort'  => 6,
    ],  [
        'key'   => 'contacts.persons',
        'name'  => 'admin::app.acl.persons',
        'route' => 'admin.contacts.persons.index',
        'sort'  => 1,
    ], [
        'key'   => 'contacts.persons.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.contacts.persons.create', 'admin.contacts.persons.store'],
        'sort'  => 2,
    ], [
        'key'   => 'contacts.persons.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.contacts.persons.edit', 'admin.contacts.persons.update'],
        'sort'  => 3,
    ], [
        'key'   => 'contacts.persons.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => ['admin.contacts.persons.delete', 'admin.contacts.persons.mass_delete'],
        'sort'  => 4,
    ], [
        'key'   => 'contacts.persons.export',
        'name'  => 'admin::app.acl.export',
        'route' => 'ui.datagrid.export',
        'sort'  => 4,
    ],  [
        'key'   => 'contacts.persons.view',
        'name'  => 'admin::app.acl.view',
        'route' => 'admin.contacts.persons.view',
        'sort'  => 5,
    ], [
        'key'   => 'contacts.organizations',
        'name'  => 'admin::app.acl.organizations',
        'route' => 'admin.contacts.organizations.index',
        'sort'  => 2,
    ], [
        'key'   => 'contacts.organizations.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.contacts.organizations.create', 'admin.contacts.organizations.store'],
        'sort'  => 1,
    ], [
        'key'   => 'contacts.organizations.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.contacts.organizations.edit', 'admin.contacts.organizations.update'],
        'sort'  => 2,
    ], [
        'key'   => 'contacts.organizations.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => ['admin.contacts.organizations.delete', 'admin.contacts.organizations.mass_delete'],
        'sort'  => 3,
    ], [
        'key'   => 'settings',
        'name'  => 'admin::app.acl.settings',
        'route' => 'admin.settings.index',
        'sort'  => 8,
    ], [
        'key'   => 'settings.user',
        'name'  => 'admin::app.acl.user',
        'route' => ['admin.settings.groups.index', 'admin.settings.roles.index', 'admin.settings.users.index'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.user.groups',
        'name'  => 'admin::app.acl.groups',
        'route' => 'admin.settings.groups.index',
        'sort'  => 1,
    ], [
        'key'   => 'settings.user.groups.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.groups.create', 'admin.settings.groups.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.user.groups.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.groups.edit', 'admin.settings.groups.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.user.groups.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.groups.delete',
        'sort'  => 3,
    ], [
        'key'   => 'settings.user.roles',
        'name'  => 'admin::app.acl.roles',
        'route' => 'admin.settings.roles.index',
        'sort'  => 2,
    ], [
        'key'   => 'settings.user.roles.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.roles.create', 'admin.settings.roles.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.user.roles.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.roles.edit', 'admin.settings.roles.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.user.roles.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.roles.delete',
        'sort'  => 3,
    ],  [
        'key'   => 'settings.user.users',
        'name'  => 'admin::app.acl.users',
        'route' => 'admin.settings.users.index',
        'sort'  => 3,
    ], [
        'key'   => 'settings.user.users.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.users.create', 'admin.settings.users.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.user.users.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.users.edit', 'admin.settings.users.update', 'admin.settings.users.mass_update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.user.users.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => ['admin.settings.users.delete', 'admin.settings.users.mass_delete'],
        'sort'  => 3,
    ], [
        'key'   => 'settings.initiative',
        'name'  => 'admin::app.acl.initiative',
        'route' => ['admin.settings.pipelines.index', 'admin.settings.sources.index', 'admin.settings.types.index'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.initiative.pipelines',
        'name'  => 'admin::app.acl.pipelines',
        'route' => 'admin.settings.pipelines.index',
        'sort'  => 1,
    ], [
        'key'   => 'settings.initiative.pipelines.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.pipelines.create', 'admin.settings.pipelines.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.initiative.pipelines.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.pipelines.edit', 'admin.settings.pipelines.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.initiative.pipelines.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.pipelines.delete',
        'sort'  => 3,
    ], [
        'key'   => 'settings.initiative.sources',
        'name'  => 'admin::app.acl.sources',
        'route' => 'admin.settings.sources.index',
        'sort'  => 2,
    ], [
        'key'   => 'settings.initiative.sources.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.sources.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.initiative.sources.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.sources.edit', 'admin.settings.sources.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.initiative.sources.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.sources.delete',
        'sort'  => 3,
    ], [
        'key'   => 'settings.initiative.types',
        'name'  => 'admin::app.acl.types',
        'route' => 'admin.settings.types.index',
        'sort'  => 3,
    ], [
        'key'   => 'settings.initiative.types.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.types.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.initiative.types.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.types.edit', 'admin.settings.types.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.initiative.types.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.types.delete',
        'sort'  => 3,
    ], [
        'key'   => 'settings.automation',
        'name'  => 'admin::app.acl.automation',
        'route' => ['admin.settings.attributes.index', 'admin.settings.email_templates.index', 'admin.settings.workflows.index'],
        'sort'  => 3,
    ], [
        'key'   => 'settings.automation.attributes',
        'name'  => 'admin::app.acl.attributes',
        'route' => 'admin.settings.attributes.index',
        'sort'  => 1,
    ], [
        'key'   => 'settings.automation.attributes.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.attributes.create', 'admin.settings.attributes.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.automation.attributes.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.attributes.edit', 'admin.settings.attributes.update', 'admin.settings.attributes.mass_update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.automation.attributes.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.attributes.delete',
        'sort'  => 3,
    ], [
        'key'   => 'settings.automation.email_templates',
        'name'  => 'admin::app.acl.email-templates',
        'route' => 'admin.settings.email_templates.index',
        'sort'  => 7,
    ], [
        'key'   => 'settings.automation.email_templates.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.email_templates.create', 'admin.settings.email_templates.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.automation.email_templates.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.email_templates.edit', 'admin.settings.email_templates.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.automation.email_templates.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.email_templates.delete',
        'sort'  => 3,
    ], [
        'key'   => 'settings.automation.workflows',
        'name'  => 'admin::app.acl.workflows',
        'route' => 'admin.settings.workflows.index',
        'sort'  => 2,
    ], [
        'key'   => 'settings.automation.workflows.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.workflows.create', 'admin.settings.workflows.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.automation.workflows.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.workflows.edit', 'admin.settings.workflows.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.automation.workflows.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.workflows.delete',
        'sort'  => 3,
    ],
    [
        'key'   => 'settings.automation.webhooks',
        'name'  => 'admin::app.acl.webhook',
        'route' => 'admin.settings.webhooks.index',
        'sort'  => 1,
    ], [
        'key'   => 'settings.automation.webhooks.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.webhooks.create', 'admin.settings.webhooks.store'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.automation.webhooks.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.webhooks.edit', 'admin.settings.webhooks.update'],
        'sort'  => 2,
    ], [
        'key'   => 'settings.automation.webhooks.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => 'admin.settings.webhooks.delete',
        'sort'  => 3,
    ], [
        'key'   => 'settings.other_settings',
        'name'  => 'admin::app.acl.other-settings',
        'route' => 'admin.settings.tags.index',
        'sort'  => 4,
    ], [
        'key'   => 'settings.other_settings.tags',
        'name'  => 'admin::app.acl.tags',
        'route' => 'admin.settings.tags.index',
        'sort'  => 1,
    ], [
        'key'   => 'settings.other_settings.tags.create',
        'name'  => 'admin::app.acl.create',
        'route' => ['admin.settings.tags.create', 'admin.settings.tags.store', 'admin.initiatives.tags.attach'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.other_settings.tags.edit',
        'name'  => 'admin::app.acl.edit',
        'route' => ['admin.settings.tags.edit', 'admin.settings.tags.update'],
        'sort'  => 1,
    ], [
        'key'   => 'settings.other_settings.tags.delete',
        'name'  => 'admin::app.acl.delete',
        'route' => ['admin.settings.tags.delete', 'admin.settings.tags.mass_delete', 'admin.initiatives.tags.detach'],
        'sort'  => 2,
    ], [
        'key'   => 'configuration',
        'name'  => 'admin::app.acl.configuration',
        'route' => 'admin.configuration.index',
        'sort'  => 9,
    ], [
        'key'   => 'bill_files',
        'name'  => 'admin::app.acl.bill-files',
        'route' => 'admin.bill-files.index',
        'sort'  => 7,
        'children' => [
            [
                'key'   => 'bill_files.create',
                'name'  => 'admin::app.acl.create',
                'route' => ['admin.bill-files.create', 'admin.bill-files.store'],
                'sort'  => 1,
            ],
            [
                'key'   => 'bill_files.view',
                'name'  => 'admin::app.acl.view',
                'route' => ['admin.bill-files.index', 'admin.bill-files.view'],
                'sort'  => 2,
            ],
            [
                'key'   => 'bill_files.edit',
                'name'  => 'admin::app.acl.edit',
                'route' => ['admin.bill-files.edit', 'admin.bill-files.update'],
                'sort'  => 3,
            ],
            [
                'key'   => 'bill_files.delete',
                'name'  => 'admin::app.acl.delete',
                'route' => ['admin.bill-files.delete', 'admin.bill-files.mass-delete'],
                'sort'  => 4,
            ],
        ],
    ],
];