<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * get a single value for a user meta
 *
 * @param int $user_id
 * @param string $key
 * @return mixed
 */
function get_user_meta($user_id, $key)
{
    $kwestion = new Account();
    $user_data = $kwestion->get_single_meta_value($user_id, $key);

    return $user_data;
}

/**
 * Get the user's data
 *
 * @return mixed
 */
function get_user_data($id  = "")
{
    $kwestion = new Account();
    $data = $kwestion->get_userdata($id);

    return $data;
}

/**
 * Get the user's thumbnail url from the database
 *
 * @param string $user_id
 * @return string
 */
function get_user_thumbnail($user_id = "")
{
    $data = get_user_data($user_id);

    return $data['thumbnail_url'];
}

/**
 * Get the user's first and last name
 *
 * @param string $user_id
 * @return string
 */
function get_user_fullname($user_id = "")
{
    $data = get_user_data($user_id);

    return $data['first_name'] . " " . $data['last_name'];
}

/**
 * Get the user's email
 *
 * @param string $user_id
 * @return string
 */
function get_user_identity($user_id = "")
{
    $data = get_user_data($user_id);

    return $data['identity'];
}

/**
 * Get the user's role
 *
 * @param string $user_id
 * @return string
 */
function get_user_role($user_id = "")
{
    $data = get_user_data($user_id);

    return $data['role'];
}

/**
 * Get the user's role description
 *
 * @param string $user_id
 * @return string
 */
function get_user_role_desc($user_id = "")
{
    $data = get_user_role($user_id);

    return $data['description'];
}

/**
 * Get the user's role name
 *
 * @param string $user_id
 * @return string
 */
function get_user_role_name($user_id = "")
{
    $data = get_user_role($user_id);

    return $data['title'];
}

/**
 * get the meta for table or somethiing like dat
 *
 * @param string $table_name
 * @param string $prefix
 * @param string $id
 * @param string $key
 * @return string
 */
function get_meta_value($table_name ="", $prefix="", $id ="", $key ="")
{
    $db = new Database();
    $data = $db->get($table_name, "*", [
        'meta_key'	=> $key,
        $prefix . '_id'	=> $id,
    ]);

    return $data['meta_value'];
}

/**
 * Get the id of the currently logged in user
 *
 * @return void
 */
function get_user_id()
{
    $data = $_SESSION['login_data']['user_id'];

    return $data;
}
