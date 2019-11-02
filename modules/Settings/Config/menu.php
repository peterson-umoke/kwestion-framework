<?php

return [
    'title' => 'Settings',
    'route' => 'pages.index',
    'icon' => 'wb-grid-4',
    'children' => [
        [
            'title' => 'General',
            'route' => 'pages.index'
        ], [
            'title' => 'Add Settings',
            'route' => 'pages.create'
        ],
    ],
];
