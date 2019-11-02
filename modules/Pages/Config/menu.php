<?php

return [
    'title' => 'Pages',
    'route' => 'pages.index',
    'icon' => 'fas fa-page',
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
