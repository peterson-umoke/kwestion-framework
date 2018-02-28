<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

// begin the path
$page = array();

if (isset($_SERVER['REQUEST_URI'])) {

    // get the actual url requested from the server
    $page['raw_url'] = $_SERVER['REQUEST_URI'];

    // explode to get the $_GET values
    $page['url_array']	= explode('?', $page['raw_url']);

    // get the directory anem where the project lives
    $page['cms_path'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');

    // remove the cms folder path from the url array
    $page['folder_url'] = substr(urldecode($page['url_array'][0]), strlen($page['cms_path']) + 1);

    // confirm to utf-8 standards
    $page['call']	= utf8_decode($page['folder_url']);

    // get the actual last file
    $page['main_file'] = basename($_SERVER['PHP_SELF']);

    if ($page['call'] == $page['main_file']) {
        $page['call'] = "";
    }

    // explode the call
    $page['call_parts'] = explode('/', $page['call']);
    print_r($page['call_parts']);
}
