<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * This file contains the definitions for the entire framework
 *
 * @author Peterson Umoke <umoke10@hotmail.com>
 */

/**
 * ===========================================
 * define the system directory path
 * ===========================================
 */
if (!defined('SYSTEM_DIR')) {
    define("SYSTEM_DIR", SITE_DIR . DS . 'system');
}

/**
 * ===========================================
 * define the includes directory path
 * ===========================================
 */
if (!defined('INCLUDES_DIR')) {
    define("INCLUDES_DIR", SYSTEM_DIR . DS . 'includes');
}

/**
 * ===========================================
 * define the system's helper directory path
 * ===========================================
 */
if (!defined('SYS_HELPERS_DIR')) {
    define("SYS_HELPERS_DIR", SYSTEM_DIR . DS . 'helpers');
}

/**
 * ===========================================
 * define the system's library directory path
 * ===========================================
 */
if (!defined('SYS_LIBRARY_DIR')) {
    define("SYS_LIBRARY_DIR", SYSTEM_DIR . DS . 'library');
}

/**
 * ===========================================
 * define the system's view directory path
 * ===========================================
 */
if (!defined('SYS_VIEWS_DIR')) {
    define("SYS_VIEWS_DIR", SYSTEM_DIR . DS . 'views');
}

/**
 * ===========================================
 * define the uploads directory name
 * ===========================================
 */
if (!defined('UPLOADS_DIR_NAME')) {
    define("UPLOADS_DIR_NAME", 'uploads');
}

 /**
  * ===========================================
  * define the uploads directory path
  * ===========================================
  */
  if (!defined('UPLOADS_DIR')) {
      define("UPLOADS_DIR", SITE_DIR . DS . UPLOADS_DIR_NAME);
  }

/**
 * ===========================================
 * define the views directory name
 * ===========================================
 */
if (!defined('VIEWS_DIR_NAME')) {
    define("VIEWS_DIR_NAME", 'views');
}

 /**
  * ===========================================
  * define the views directory path
  * ===========================================
  */
  if (!defined('VIEWS_DIR')) {
      define("VIEWS_DIR", SITE_DIR . DS . VIEWS_DIR_NAME);
  }

  /**
   * ===========================================
   * define the configuration directory path
   * ===========================================
   */
  if (!defined('CONFIG_DIR_NAME')) {
      define("CONFIG_DIR_NAME", 'config');
  }

  /**
   * ===========================================
   * define the configuration directory path
   * ===========================================
   */
  if (!defined('CONFIG_DIR')) {
      define("CONFIG_DIR", SITE_DIR . DS . CONFIG_DIR_NAME);
  }

/**
 * ===========================================
 * define the assets directory name
 * ===========================================
 */
if (!defined('ASSETS_DIR_NAME')) {
    define("ASSETS_DIR_NAME", 'assets');
}

/**
  * ===========================================
  * define the assets directory path
  * ===========================================
  */
  if (!defined('ASSETS_DIR')) {
      define("ASSETS_DIR", SITE_DIR . DS . ASSETS_DIR_NAME);
  }

/**
 * ===========================================
 * define the helpers directory name
 * ===========================================
 */
if (!defined('HELPERS_DIR_NAME')) {
    define("HELPERS_DIR_NAME", 'helpers');
}

/**
  * ===========================================
  * define the helpers directory path
  * ===========================================
  */
  if (!defined('HELPERS_DIR')) {
      define("HELPERS_DIR", SITE_DIR . DS . HELPERS_DIR_NAME);
  }

/**
 * ===========================================
 * define the library directory name
 * ===========================================
 */
if (!defined('LIBRARY_DIR_NAME')) {
    define("LIBRARY_DIR_NAME", 'library');
}

/**
  * ===========================================
  * define the library directory path
  * ===========================================
  */
  if (!defined('LIBRARY_DIR')) {
      define("LIBRARY_DIR", SITE_DIR . DS . LIBRARY_DIR_NAME);
  }

/**
 * ===========================================
 * define the composer packages(vendors) directory name
 * ===========================================
 */
if (!defined('COMPOSER_PACKAGES_DIR_NAME')) {
    define("COMPOSER_PACKAGES_DIR_NAME", 'vendors');
}

/**
  * ===========================================
  * define the composer packages(vendors) directory path
  * ===========================================
  */
  if (!defined('COMPOSER_PACKAGES_DIR')) {
      define("COMPOSER_PACKAGES_DIR", SITE_DIR . DS . COMPOSER_PACKAGES_DIR_NAME);
  }

/**
  * ===========================================
  * define the assets directory url
  * ===========================================
  */
  if (!defined('ASSETS_URL')) {
      define("ASSETS_URL", SITE_URL . DS . ASSETS_DIR_NAME);
  }

/**
  * ===========================================
  * define the uploads directory url
  * ===========================================
  */
  if (!defined('UPLOADS_URL')) {
      define("UPLOADS_URL", SITE_DIR . DS . UPLOADS_DIR_NAME);
  }

  /**
  * ===========================================
  * define the uploads directory structure
  * ===========================================
  */
  if (!defined('UPLOADS_DIR_STRUCTURE')) {
      define("UPLOADS_DIR_STRUCTURE", date("Y")."/".date("M")."/".date("d")."/");
  }
