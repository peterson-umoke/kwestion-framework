<?php

return [
    'admin' => [
        'user_profile' => [
            [
                'title' => 'Profile',
                'route' => ["admin.edit", \Illuminate\Support\Facades\Auth::user() ?? ''],
                'icon' => 'fas fa-user',
            ],
        ],
        'sidebar' => [
            [
                'category' => 'General',
                'title' => 'Dashboard',
                'route' => 'admin.home',
                'icon' => 'fas fa-user',
            ],
            [
                'title' => 'Users',
                'route' => 'users.index',
                'icon' => 'fas fa-user',
                'children' => [
                    [
                        'title' => 'All Users',
                        'route' => 'users.index'
                    ],
                    [
                        'title' => 'Add User',
                        'route' => 'users.create'
                    ],
                    [
                        'title' => 'User Roles',
                        'route' => 'users.roles.index'
                    ],
                ],
            ],
            [
                'title' => 'Admins',
                'route' => 'admins.index',
                'icon' => 'fas fa-user',
                'children' => [
                    [
                        'title' => 'All Admins',
                        'route' => 'admins.index'
                    ],
                    [
                        'title' => 'Add Admin',
                        'route' => 'admins.create'
                    ],
                    [
                        'title' => 'Admin Roles',
                        'route' => 'admins.roles.index'
                    ],
                ],
            ],
        ],
    ]
];
