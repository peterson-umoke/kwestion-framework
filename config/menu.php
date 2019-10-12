<?php

/***
//  * Example route configurations
 array(
                'title' => 'dashboard',
                'icon' => '<svg class="same-icon-size lnr lnr-chart-bars"><use xlink:href="#lnr-chart-bars"></use></svg>',
                'attr' => '',
                'route' => 'admin.home',
                // 'url' => 'admin/home',
                'children' => array(
                    array(
                        'title' => 'pikin dashboard',
                        'attr' => '',
                        'route' => 'admin.home',
                        'url' => '',
                    )
                ),
            ),
 */
return [
    'admin' => array(
        'sidebar' => array(
            array(
                'title' => 'dashboard',
                'icon' => '<svg class="same-icon-size lnr lnr-chart-bars"><use xlink:href="#lnr-chart-bars"></use></svg>',
                'route' => 'admin.home',
                'children' => array(
                    array(
                        'title' => 'pikin dashboard',
                        'route' => 'admin.home',
                    ),
                    array(
                        'title' => 'visit site',
                        'route' => 'guest.welcome',
                    ),
                    array(
                        'title' => 'wire the funds now',
                        'route' => 'guest.welcome',
                    ),
                ),
            ),
            array(
                'title' => 'users',
                'icon' => '<svg class="same-icon-size lnr lnr-users"><use xlink:href="#lnr-users"></use></svg>',
                'attr' => '',
                'route' => 'admin.show',
                'children' => array(),
            ),
            array(
                'title' => 'pages',
                'icon' => '<svg class="same-icon-size lnr lnr-pencil"><use xlink:href="#lnr-pencil"></use></svg>',
                'route' => '',
                'children' => array(),
            ),
            array(
                'title' => 'settings',
                'icon' => '<svg class="same-icon-size lnr lnr-cog"><use xlink:href="#lnr-cog"></use></svg>',
                'route' => '',
                'children' => array(),
            ),
        ),
    ),
];
