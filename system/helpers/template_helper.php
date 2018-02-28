<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

function show_error($title, $description)
{
    if (file_exists(VIEWS_DIR . DS . 'errors' . DS . 'custom_errors.php')) {
        require_once VIEWS_DIR . DS . 'errors' . DS . 'custom_errors.php';
    } else {
        require_once SYS_VIEWS_DIR . DS . 'errors' . DS . 'custom_errors.php';
    }
}
