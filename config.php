<?php
//The MySQL server you want phurl to connect to. High chance you won't need to change this, if you have a decent hosting package or server.
define('DB_HOSTNAME', 'localhost');
//Your MySQL username
define('DB_USERNAME', 'CHANGEME');
//Your MySQL password
define('DB_PASSWORD', 'CHANGEME');
//Name of the database you want phurl to use
define('DB_NAME', 'CHANGEME');
//No need to worry about the next two. If you don't know what they're for, you likely don't need them.
define('DB_VERSION', '4');
define('DB_PREFIX', 'phurl_');
//The URL of your new URL shortener. Make sure it doesn't have a slash at the end!
define('SITE_URL', 'http://CHANGEME');
//A nice name for your URL shortener. 
define('SITE_TITLE', 'CHANGEME');
//The credentials you want to log into the admin panel with
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'CHANGEME');

/*
 * Do not touch this part. It is vital for correct operation of Phurl.
 */
define('URL_PROTOCOLS', 'http|https|ftp|ftps|mailto|news|mms|rtmp|rtmpt|e2dk');
define('PHURL_VERSION', '2');
define('PHURL_NUMERICVERSION', '999999');
error_reporting(E_ALL);
$_ERROR = array();
?>