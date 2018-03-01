<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
  * Get access to the global ASSETS_URL constant
  */
  if (!function_exists('assets')) {
      function assets($dest = "")
      {
          if (!empty($dest)) {
              return ASSETS_URL . "/" . $dest;
          } else {
              return ASSETS_URL;
          }
      }
  }

  if (!function_exists('uploads_url')) {
      /**
      * Get access to the global UPLOADS_URL constant
      */
      function uploads_url($dest = "", $use_structure = false)
      {
          if (!empty($dest) && $use_structure == true) {
              return UPLOADS_URL . "/" . UPLOADS_DIR_STRUCTURE . "/" . $dest;
          } elseif (!empty($dest) && $use_structure != true) {
              return UPLOADS_URL . "/" . $dest;
          } else {
              return UPLOADS_URL;
          }
      }
  }

  if (!function_exists('url')) {
      /**
      * Get access to the global SITE_URL constant
      */
      function url($dest = "")
      {
          if (!empty($dest)) {
              return SITE_URL . "/" . $dest;
          } else {
              return SITE_URL;
          }
      }
  }
 if (!function_exists('admin_url')) {

     /**
      * Get access to the global SITE_URL constant
      */
     function admin_url($dest = "")
     {
         if (!empty($dest)) {
             return SITE_URL . "/" . 'admin/' . $dest;
         } else {
             return SITE_URL . '/admin/';
         }
     }
 }

 if (!function_exists('redirect')) {
     /**
      * redirect users to a particular page
      */
     function redirect($dest = "")
     {
         if (!empty($dest)) {
             header("Location:" . url($dest));
         }

         // quit the script from running anymore
         die("<h1> Redirect Error!</h1> Please kindly input the proper route");
     }
 }
