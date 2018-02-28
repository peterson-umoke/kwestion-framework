<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * Used to easily require files and display an error message if the required file dons not exit adn
 *
 * eg get_template('admin_header');
 *
 * @author <umoke10@hotmail.com>
 * @version 1.3.2
 * @return file
 */
function get_template($template_name, $where = "views", $data = array())
{
    if (is_array($data)) {
        extract($data);
    }
    switch ($where) {
        case 'system':
                if (file_exists(SYS_VIEWS_DIR . DS . $template_name . ".php")) {
                    require_once SYS_VIEWS_DIR . DS . $template_name . ".php";
                }
            break;

        case 'views':
                if (file_exists(VIEWS_DIR . DS . $template_name . ".php")) {
                    require_once VIEWS_DIR . DS . $template_name . ".php";
                }
            break;

        default:
                show_plain_error('The File Requested Doesnt exist');
            break;
    }
}


/**
 * get a template from the views file in the system folder
 *
 * @param [type] $template_name
 * @return file
 */
function get_admin_template($template_name, $data = array())
{
    get_template($template_name, 'system', $data);
}

/**
 * Get a template from the custom views directory
 *
 * @param string $template_name
 * @return file
 */
function get_view_template($template_name, $data = array())
{
    get_template($template_name, 'views', $data);
}
