<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * ===========================================
 * start session for the site
 * ===========================================
 */
session_start();

/**
 * This file is responsible for piecing the entire application
 *
 * @author Peterson  <umoke10@hotmail.com>
 */

 /**
  * ===========================================
  * this way it defines and overides the defaults in the system constants file
  * ===========================================
  */
 if (file_exists(SITE_DIR . DS . 'config' . DS . 'constants.php')) {
     require_once SITE_DIR . DS . 'config' . DS . 'constants.php';
     require_once SITE_DIR . DS . 'system' . DS . 'includes' . DS . 'constants.php';
 } else {
     require_once SITE_DIR . DS . 'system' . DS . 'includes' . DS . 'constants.php';
 }

 /**
  * ===========================================
  * import the composer autoload file for custom library
  * ===========================================
  */
  if (file_exists(COMPOSER_PACKAGES_DIR . DS . 'autoload.php')) {
      require_once COMPOSER_PACKAGES_DIR . DS . 'autoload.php';
  }

 /**
  * ===========================================
  * import the system autoload file for custom library
  * ===========================================
  */
  if (file_exists(INCLUDES_DIR . DS . 'autoload.php')) {
      require_once INCLUDES_DIR . DS . 'autoload.php';
  }

 /**
  * ===========================================
  * import the site setup file
  * ===========================================
  */
  if (file_exists(CONFIG_DIR . DS . 'site-setup.php')) {
      require_once CONFIG_DIR . DS . 'site-setup.php';
      require_once INCLUDES_DIR . DS . 'site-setup.php';
  } else {
      require_once INCLUDES_DIR . DS . 'site-setup.php';
  }

 /**
  * ===========================================
  * import the actions file
  * ===========================================
  */
  if (file_exists(INCLUDES_DIR . DS . 'actions.php')) {
      require_once INCLUDES_DIR . DS . 'actions.php';
  }

 /**
  * ===========================================
  * import the database file
  * ===========================================
  */
  if (file_exists(CONFIG_DIR . DS . 'database.php')) {
      require_once CONFIG_DIR . DS . 'database.php';
      require_once INCLUDES_DIR . DS . 'database.php';
  } else {
      require_once INCLUDES_DIR . DS . 'database.php';
  }

 /**
  * ===========================================
  * import the database file
  * ===========================================
  */
  if (file_exists(CONFIG_DIR . DS . 'helpers.php')) {
      require_once CONFIG_DIR . DS . 'helpers.php';
      require_once INCLUDES_DIR . DS . 'helpers.php';
  } else {
      require_once INCLUDES_DIR . DS . 'helpers.php';
  }

 /**
  * ===========================================
  * import the controller file
  * ===========================================
  */
  if (file_exists(CONFIG_DIR . DS . 'controller.php')) {
      require_once CONFIG_DIR . DS . 'controller.php';
      require_once INCLUDES_DIR . DS . 'controller.php';
  } else {
      require_once INCLUDES_DIR . DS . 'controller.php';
  }

  /**
  * ===========================================
  * import the loader file which loads other files in the config directory
  * ===========================================
  */
  if (file_exists(CONFIG_DIR . DS . 'loader.php')) {
      require_once CONFIG_DIR . DS . 'loader.php';
  }

 /**
  * ===========================================
  * import the router file
  * ===========================================
  */
  if (file_exists(INCLUDES_DIR . DS . 'router.php')) {
      require_once INCLUDES_DIR . DS . 'router.php';
  }
