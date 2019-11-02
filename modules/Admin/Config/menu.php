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
                'icon' => 'wb-dashboard',
            ],
            [
                'title' => 'Users',
                'route' => 'users.index',
                'icon' => 'wb-grid-4',
                'children' => [
                    [
                        'title' => 'All Users',
                        'route' => 'admin.users.index'
                    ],
                    [
                        'title' => 'Add User',
                        'route' => 'admin.users.create'
                    ],
                    [
                        'title' => 'User Roles',
                        'route' => 'admin.users.roles.index'
                    ],
                ],
            ],
            [
                'title' => 'Admins',
                'route' => 'admins.index',
                'icon' => 'wb-grid-4',
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
