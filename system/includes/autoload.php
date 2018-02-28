<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * This is responsible for autoloading php classes in the system libray folder and in the user's csutom library class
 *
 * @author Peterson Umoke <umoke10@hotmail.com>
 */

 function load_classes($classname)
 {
     $folders = [
        SYS_LIBRARY_DIR . DS . $classname . '.php',
        LIBRARY_DIR . DS . $classname . '.php',
     ];

     for ($i = 0; $i < count($folders); $i++) {
         $filename = $folders[$i];

         if (file_exists($filename)) {
             require_once $filename;
         }
     }
 }

 // call the autoload
 spl_autoload_register('load_classes');
