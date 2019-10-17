<?php

return [
    'admin' => [
        'driver' => 'session',
        'provider' => 'admins',
    ],

    'admin-api' => [
        'driver' => 'token',
        'provider' => 'admins',
        'hash' => false,
    ],
];
