<?php

return [
    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 1025),
            'encryption' => env('MAIL_ENCRYPTION', null),
            'username' => env('MAIL_USERNAME', null),
            'password' => env('MAIL_PASSWORD', null),
            'timeout' => null,
            'auth_mode' => null,
        ],
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'no-reply@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
];