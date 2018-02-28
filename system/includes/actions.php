<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * ===========================
 * Initiate the maintance mode of the site
 *
 * @author Peterson Umoke <umoke10@hotmail.com>
 * ===========================
 */

if (MAINTENANCE_MODE === true) {
    require_once VIEWS_DIR . '/templates/503.php';

    die();
}

/**
 * ===========================
 * setup the environment for the site
 *
 * @author Peterson Umoke <umoke10@hotmail.com>
 * ===========================
 */

switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
    break;

    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.3', '>=')) {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        } else {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
    break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', true, 503);
        echo 'The application environment is not set correctly.';
        exit(1); // EXIT_ERROR
}
