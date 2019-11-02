<?php

return [
    'title' => 'Pages',
    'route' => 'pages.index',
    'icon' => 'wb-grid-4',
    'children' => [
        [
            'title' => 'All Pages',
            'route' => 'pages.index'
        ], [
            'title' => 'Add Pages',
            'route' => 'pages.create'
        ],
    ],
];
