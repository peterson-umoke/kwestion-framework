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
