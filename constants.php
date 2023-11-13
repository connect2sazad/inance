<?php

    if(!defined('CURRENT_TIME_ZONE')){
        define('CURRENT_TIME_ZONE', 'Asia/Kolkata');
    }

    if(!defined('___ABS_PATH___')) {
        define('___ABS_PATH___', __DIR__.'/');
    }

    if(!defined('___INC___')) {
        define('___INC___', ___ABS_PATH___.'includes/');
    }

    if(!defined('___ASSETS___')) {
        define('___ASSETS___', ___ABS_PATH___.'assets/');
    }

    if(!defined('___FUNCTIONS___')) {
        define('___FUNCTIONS___', ___INC___.'functions.php');
    }

    if(!defined('___CLASSES___')) {
        define('___CLASSES___', ___INC___.'classes.php');
    }

    if(!defined('___DB_CON___')) {
        define('___DB_CON___', ___INC___.'db_con.php');
    }

    if(!defined('USER_GLOBAL_VAR')){
        define('USER_GLOBAL_VAR', 'shikayaat_user');
    }

    if(!defined('URI_URL')){
        define('URI_URL', "http" . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "s" : "") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    }

    

    date_default_timezone_set(CURRENT_TIME_ZONE);
