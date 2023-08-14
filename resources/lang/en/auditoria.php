<?php
return [
    // ...

    'unavailable_audits' => 'No se pudo mostrar la Auditoría',

    'updated'            => [
        'metadata' => 'On :audit_created_at, :user_name updated this record via :audit_url',
        'modified' => [
            'title'   => 'The Title has been modified from <strong>:old</strong> to <strong>:new</strong>',
            'content' => 'The Content has been modified from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],

    'created'            => [
        'metadata' => 'On :audit_created_at, :user_name created this record via :audit_url',
        'modified' => [
            'title'   => 'The Title has been modified from <strong>:old</strong> to <strong>:new</strong>',
            'content' => 'The Content has been modified from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],
    'deleted'            => [
        'metadata' => 'On :audit_created_at, :user_name deleted this record via :audit_url',
        'modified' => [
            'title'   => 'The Title has been modified from <strong>:old</strong> to <strong>:new</strong>',
            'content' => 'The Content has been modified from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],
    'restored'            => [
        'metadata' => 'On :audit_created_at, :user_name restored this record via :audit_url',
        'rmodified' => [
            'title'   => 'The Title has been modified from <strong>:old</strong> to <strong>:new</strong>',
            'content' => 'The Content has been modified from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],
    // ...
];
