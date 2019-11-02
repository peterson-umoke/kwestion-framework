<?php

return [
    'title' => 'Settings',
    'route' => 'pages.index',
    'icon' => 'fas fa-page',
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
