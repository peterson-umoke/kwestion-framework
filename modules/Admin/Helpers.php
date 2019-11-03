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

if (!function_exists('get_route')) {
    function get_route($route)
    {
        if (is_array($route)) {

            return call_user_func_array('route', call_user_func_array($route[0][0]));
        } else {
            return route($route);
        }
    }
}

if (!function_exists('get_current_user_role')):
    function get_current_user_role()
    {
        return auth()->user()->roles()->first();
    }
endif;
//
//
//if(!function_exists('have_role')) {
//    function have_roles($role = array()) {
//        $data = auth()->user-
//    }
//}
