<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

use Medoo\Medoo;

/**
 * Database class
 *
 * This is the wrapper class for the medoo query builder
 * @author Peterson Umoke <umoke10@hotmail.com>
 */
class Database extends Medoo
{
    public function __construct()
    {
        parent::__construct(DATABASE_SETTINGS);
    }
}
