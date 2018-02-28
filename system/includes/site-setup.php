<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * This is the basic default for the entire site
 *
 * @author Peterson Umoke <umoke10@hotmail.com>
 */

/**
 * =================================
 * what is the symbol for currency in this site
 *
 * you can use unicode or actual text
 * e.g &copy; or $
 * ================================
 */
  if (!defined("CURRENCY_SYMBOL")) {
      define("CURRENCY_SYMBOL", "&#8358;");
  }

/**
 * ===========================================
 * define the site's environment
 *
 * possible values for this is 'development' or 'production'
 * ===========================================
 */
if (!defined('ENVIRONMENT')) {
    define("ENVIRONMENT", 'development');
}

/**
 * ===========================================
 * state whether the site is in maintanace mode or not
 * ===========================================
 */
  if (!defined('MAINTENANCE_MODE')) {
      define('MAINTENANCE_MODE', false);
  }

  /**
  * ==============================
  * define the site name
  * ==============================
  */
 if (!defined('SITE_NAME')) {
     define('SITE_NAME', 'Kwestion Framework');
 }

 /**
 * ==============================
 * define the site general description
 * ==============================
 */
 if (!defined('SITE_DESCRIPTION')) {
     define("SITE_DESCRIPTION", '');
 }

 /**
 * ==============================
 * define the site general tagline
 * ==============================
 */
 if (!defined('SITE_TAGLINE')) {
     define("SITE_TAGLINE", '');
 }

 /**
 * ==============================
 * define the site logo
 * ==============================
 */
 if (!defined('SITE_LOGO')) {
     define("SITE_LOGO", '');
 }

 /**
 * ==============================
 * define the site admin email address
 * config for phpmailer
 * ==============================
 */
if (!defined('SITE_ADMIN_EMAIL')) {
    define("SITE_ADMIN_EMAIL", 'pvirus.umoke@gmail.com');
}

/**
 * ===========================================
 * define the secret API Keys for paystack
 * ===========================================
 */
if (!defined('PAYSTACK_SECRET_KEY')) {
    define("PAYSTACK_SECRET_KEY", 'sk_test_ae29bc1e70e66d51eeb535ad34579f02d825565d');
}

/**
 * ===========================================
 * define the public API Keys for paystack
 * ===========================================
 */
if (!defined('PAYSTACK_PUBLIC_KEY')) {
    define("PAYSTACK_PUBLIC_KEY", 'pk_test_4f2252e9ba32042fb3905c975dc421084a1044c9');
}
