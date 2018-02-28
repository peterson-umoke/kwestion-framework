<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

// begin the path
$page = array();
$page['default_page_name'] = CUSTOM_WELCOME_PAGE_FILE;

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
    $page['basename'] = basename($_SERVER['PHP_SELF']);

    // explode the call
    $page['call_parts'] = explode('/', $page['call']);

    // get the key for the last value in the call parts
    $page['basename_key']	= array_search($page['basename'], $page['call_parts']);

    // remove the last key
    if (count($page['call_parts']) > 1) {
        unset($page['call_parts'][$page['basename_key']]);
    }

    // compile the folder name
    $page['folder_names']	= implode(DS, $page['call_parts']);

    // compile the file name
    $page['file_name'] = $page['basename'] . '.php';

    // get the file
    $page['fullpath']	= $page['folder_names'] . DS . $page['file_name'];

    // import the file making sure that no file exists as single
    if (!empty($page['call_parts'][0])) {
        switch ($page['call_parts'][0]) {
            case 'admin': // checks if the folder call is admin
                    if ($page['basename'] == 'admin') {
                        if (file_exists(SYS_VIEWS_DIR . DS . 'admin' . DS . 'welcome.php')) {
                            require_once SYS_VIEWS_DIR . DS . 'admin' . DS . 'welcome.php';
                        }
                    } else {
                        if (file_exists(SYS_VIEWS_DIR . DS . 'admin' . DS . $page['fullpath'])) {
                            require_once SYS_VIEWS_DIR . DS . 'admin' . DS . $page['fullpath'];
                        } else {
                            if (file_exists(SYS_VIEWS_DIR . DS . 'admin' . DS . '404.php')) {
                                require_once SYS_VIEWS_DIR . DS . 'admin' . DS . '404.php';
                            }
                        }
                    }
                break;

            default: // if nothing is inputted just get the path name in the custom views folder
                    if (file_exists(VIEWS_DIR . DS . $page['fullpath'])) {
                        require_once VIEWS_DIR . DS . $page['fullpath'];
                    } else {
                        if (file_exists(VIEWS_DIR . DS . 'errors' . DS . '404.php')) {
                            require_once VIEWS_DIR . DS . 'errors' . DS . '404.php';
                        } else {
                            require_once SYS_VIEWS_DIR . DS . 'errors' . DS . '404.php';
                        }
                    }
                break;
        }
    } else {
        if (file_exists(VIEWS_DIR . DS .  $page['default_page_name'])) {
            require_once VIEWS_DIR . DS .  $page['default_page_name'];
        } else {
            die("<h1> Error Occurred!</h1>" . $page['default_page_name'] . " doesn't exist in the ". VIEWS_DIR . DS ."  directory");
        }
    }
}
