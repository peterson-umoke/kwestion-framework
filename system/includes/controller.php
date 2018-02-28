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
          redirect("admin/welcome");
      }
  }
