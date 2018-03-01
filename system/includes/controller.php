<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

  /**
  * ===========================================
  * This file can be used to overides settings for the database connection
  * @author Peterson Umoke <umoke10@hotmail.com>
  * ===========================================
  */

 //example
 if (isset($_POST['who_am_i'])) {
     die("I am Kwestion Framework");
 }

 if (isset($_GET['who_am_i'])) {
     die("i am Kwestion Framework v3");
 }

 /**
  * ===========================================
  * Login the user
  * ===========================================
  */
  if (isset($_POST['login_now'])) {
      extract($_POST);
      $acc = new Account();
      if ($acc->confirm_account($identity, $password)) {
          redirect("admin/welcome/");
      }
  }

  /**
   * ===========================================
   * Updates an account
   * ===========================================
   */
if (isset($_POST['update_account'])) {
    extract($_POST);

    $account = new Account();
    $account->update_account($update_account, [
        'first_name'	=> $first_name,
        'last_name'	=> $last_name,
    ]);

    // update the password
    if (!empty($password) && isset($password)) {
        $account->update_account($update_account, [
        'password'	=> password_hash($password, PASSWORD_DEFAULT)
    ]);
    }

    // update the profile picture
    if (isset($_FILES['thumbnail_url']) && !empty($_FILES['thumbnail_url'])) {
        upload_image($_FILES['thumbnail_url'], 'avatars/' . UPLOADS_DIR_STRUCTURE, 'users', 'thumbnail_url', [
            'id' => $update_account
        ]);
    }

    // update user role
    $account->update_single_meta($update_account, 'user_role', $user_role);

    // refresh the page
    redirect("admin/users/edit-profile?show_success_message=1");
}

  /**
   * ===========================================
   * reset password for a account
   * ===========================================
   */
if (isset($_POST['reset_password'])) {
    extract($_POST);

    $account = new Account();

    // update the password
    if (!empty($password) && isset($password)) {
        $id = $account->get_account_id($identity);
        $account->update_account($id, [
        'password'	=> password_hash($password, PASSWORD_DEFAULT)
    ]);
    }

    // refresh the page
    redirect("admin/login/?show_success_message=1");
}

/**
 * ===========================================
 * Create an account
 * ===========================================
 */

 if (isset($_POST['create_account'])) {
     extract($_POST);

     $account = new Account();

     // create the account
     if (!empty($identity) && isset($identity)) {
         $role_name = $kf_database->get("roles", 'title', ['id' => $user_role]);
         $last_id = $account->create_account($identity, $password, $first_name, $last_name, $user_role);

         //  update the profile picture
         if (isset($_FILES['thumbnail_url']) && !empty($_FILES['thumbnail_url'])) {
             upload_image($_FILES['thumbnail_url'], 'avatars/' . UPLOADS_DIR_STRUCTURE, 'users', 'thumbnail_url', [
                 'id' => $update_account
             ]);
         }

         //  refresh the page
         redirect("admin/users/edit-profile?show_success_message=1&&user_id=".$last_id);
     }
 }

/**
 * ===========================================
 * Create Roles
 * ===========================================
 */
if (isset($_POST['create_role'])) {
    extract($_POST);

    $account = new Account();

    // create the account
    if (!empty($title) && isset($title)) {
        $account->create_role($title, $description);

        //  refresh the page
        redirect("admin/users/roles?show_success_message=1");
    }
}

/**
 * ===========================================
 * Update Roles
 * ===========================================
 */
if (isset($_POST['update_role'])) {
    extract($_POST);

    // create the account
    if (!empty($title) && isset($title)) {
        $kf_database->update('roles', [
            'title'	=> $title,
            'description'	=> $description,
        ], [
            'id'	=> $update_role
        ]);

        //  refresh the page
        redirect("admin/users/roles?show_success_message=1");
    }
}
