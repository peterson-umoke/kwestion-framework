<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}


/**
 * Create the database connection needed for the application to work and makes the database variable global for the whole application
 * to use
 */


/**
  * ==============================
  * define the database connection
  * ==============================
  */
  if (!defined('DATABASE_HOST')) {
      define('DATABASE_HOST', 'localhost');
  }
  if (!defined('DATABASE_PASSWORD')) {
      define('DATABASE_PASSWORD', '');
  }
  if (!defined('DATABASE_USERNAME')) {
      define('DATABASE_USERNAME', 'root');
  }
  if (!defined('DATABASE_NAME')) {
      define('DATABASE_NAME', '');
  }
  if (!defined('DATABASE_TYPE')) {
      define('DATABASE_TYPE', 'mysql');
  }

 /**
  * Use the Medoo class with another alias
  */
 use Medoo\Medoo as Kf_Database;

 /**
 * =====================================
 * Global Variable for the Connection array
 * =====================================
 */
 global $db_settings;

/**
 * =====================================
 * Global Variable for the Kf_Database Connection
 * =====================================
 */
 global $kf_database;

/**
  * ==============================
  * database connection array for the medoo class
  * ==============================
  */
  if (null === DATABASE_TYPE) {
      die("No DATABASE_TYPE set, Please define it in the config directory for the database file");
  }
  if (null === DATABASE_NAME) {
      die("No DATABASE_NAME set, Please define it in the config directory for the database file");
  }
  if (null === DATABASE_HOST) {
      die("No DATABASE_HOST set, Please define it in the config directory for the database file");
  }
  if (null === DATABASE_USERNAME) {
      die("No DATABASE_USERNAME set, Please define it in the config directory for the database file");
  }
  if (null === DATABASE_PASSWORD) {
      die("No DATABASE_PASSWORD set, Please define it in the config directory for the database file");
  }

  // store the values
 if (!defined("DATABASE_SETTINGS")) {
     define("DATABASE_SETTINGS", [
        'database_type' => DATABASE_TYPE,
        'database_name' => DATABASE_NAME,
        'server' => DATABASE_HOST,
        'username' => DATABASE_USERNAME,
        'password' => DATABASE_PASSWORD
 ]);
 }

 $db_settings = DATABASE_SETTINGS;

/**
  * ==============================
  * database connection variable
  * ==============================
  */
 $kf_database = new Kf_Database($db_settings);
