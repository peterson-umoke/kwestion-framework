<?php


if (!function_exists('getCurrentChildRoute')) :
    function getCurrentChildRoute($options, $class = "active")
    {
        if (array_key_exists('children', $options) && is_array($options['children'])) {
            foreach ($options['children'] as $key) {
                if (Nav::isRoute($key['route'])) {
                    return $class;
                }
            }
        }
    }
endif;

if (!function_exists('generate_route')) {
    function generate_route($route)
    {
        if (is_array($route)) {
            return route($route[0], $route[1]);
        }
    }
}
