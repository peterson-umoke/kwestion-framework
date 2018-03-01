<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * This actually loads a list of helpers for the user to use
 *
 * @author Peterson Umoke <umoke10@hotmail.com>
 */

 // built in system helpers
 $sys_helpers = array(
    'url', 'template','database','form','upload','error','date'
 );

 /**
  * ==========================
  * insert the helper into the application
  * ==========================
  */
  // include the local helpers for the application
  if (isset($helpers)) {
      foreach ($helpers as $helper) {
          $filename = HELPERS_DIR . DS . $helper . '_helper.php';

          if (file_exists($filename)) {
              require_once $filename;
          } else {
              die("<h1> Error Occurred!</h1>" . $filename . " doesn't exist in the helpers directory");
          }
      }
  }

  // include the system helpers for the application
if (isset($sys_helpers)) {
    foreach ($sys_helpers as $helper) {
        $filename = SYS_HELPERS_DIR . DS . $helper . '_helper.php';

        if (file_exists($filename)) {
            require_once $filename;
        } else {
            die("<h1> Error Occurred!</h1>" . $filename . " doesn't exist in the helpers directory");
        }
    }
}
