<?php

/**
 * ===========================================
 * Contains Helpers for certain formatted dates required throughout the site
 * ===========================================
 */

 /**
  * gets the date and time
  *
  * @param integer $time
  * @return datetime
  */
 function date_and_time(int $time)
 {
     return date('dS M, Y', $time) . " by " . date('h:i:sa', $time);
 }
