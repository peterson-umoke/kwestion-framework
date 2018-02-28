<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * This file is responsible for handling the post actions been sent by the server
 *
 * @author Peterson Umoke
 */

 //example
 if (isset($_POST['who_am_i'])) {
     die("I am Kwestion Framework");
 }

 if (isset($_GET['who_am_i'])) {
     die("i am Kwestion Framework v3");
 }
