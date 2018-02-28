<?php


if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * List of Error Helper Functson to be used tin the cms
 */

function show_error($title, $description)
{
    if (file_exists(VIEWS_DIR . DS . 'errors' . DS . 'custom_errors.php')) {
        require_once VIEWS_DIR . DS . 'errors' . DS . 'custom_errors.php';
    } else {
        require_once SYS_VIEWS_DIR . DS . 'errors' . DS . 'custom_errors.php';
    }
}

function show_404($title, $description)
{
    if (file_exists(VIEWS_DIR . DS . 'errors' . DS . '404.php')) {
        require_once VIEWS_DIR . DS . 'errors' . DS . '404.php';
    } else {
        require_once SYS_VIEWS_DIR . DS . 'errors' . DS . '404.php';
    }
}

function show_plain_error($description, $title = "Error Occurred!")
{
    die("<h1> {$title} </h1>" . $description);
}
