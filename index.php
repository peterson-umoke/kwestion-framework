<?php

/**
 *
 * Kwestion Framework
 * This script can be used to build anything, it comes with a admin dashboard, a front end view and the user/customer login informtaion part
 *
 * @author Peterson Umoke<umoke10@hotmail.com>
 * @version 2.1.0
 */

   /**
  * ==============================
  * define the folder seperator which is just a fancy constant for backslash
  * ==============================
  */
  if (!defined('DS')) {
      define('DS', DIRECTORY_SEPARATOR);
  }

 /**
  * ==============================
  * define the Main site root directory
  * ==============================
  */
 if (!defined('SITE_DIR')) {
     define('SITE_DIR', dirname(__FILE__));
 }


 /**
  * ==============================
  * define the Main site url
  * ==============================
  */
  if (!defined('SITE_URL')) {
      define('SITE_URL', 'http://localhost/kwestion-framework');
  }

 // include the main config file that bootstraps all the files togetethe
 if (file_exists(SITE_DIR . DS. "system" . DS ."includes" . DS . "bootstrapper.php")) {
     require_once SITE_DIR . DS. "system" . DS ."includes" . DS . "bootstrapper.php";
 } else {
     throw new Exception("The Main Bootstrap File is Missing", 1);
 }
