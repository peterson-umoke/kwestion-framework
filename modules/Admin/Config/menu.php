<?php

return [
    'admin' => [
        'user_profile' => [
            [
                'title' => 'Profile',
                // 'route' => ["admin.admin-acl.edit", ["admin-acl" => Modules\Admin\Models\Admin::find(1)]],
                'route' => ["admin.admin-acl.edit", ["admin_acl" => 1]],
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
                        'route' => 'admin.user-roles.index'
                    ],
                ],
            ],
            [
                'title' => 'Admins',
                'icon' => 'wb-grid-4',
                'children' => [
                    [
                        'title' => 'All Admins',
                        'route' => 'admin.admin-acl.index'
                    ],
                    [
                        'title' => 'Add Admin',
                        'route' => 'admin.admin-acl.create'
                    ],
                    [
                        'title' => 'Admin Roles',
                        'route' => 'admin.roles.index'
                    ],
                ],
            ],
        ],
    ]
];
