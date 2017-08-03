<?php 
session_start();
ini_set('display_errors', 'on');
define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/tk421/rock-paper-scissors/www');

define('VIEW_ROOT', APP_ROOT . '/views');
define('APP_TITLE', 'Rock Paper Scissors');
define('APP_TAG', 'Simple PHP Game');
define('PREFIX', 'RPS_');

define('DBCON_HOST', 'localhost');
define('DBCON_DB', 'phpgame');
define('DBCON_USER', 'root');
define('DBCON_PASS', '');

/* 
    *** NO NEED TO EDIT BELOW HERE ***
*/

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, 'class/'.$className) . '.php';

    require $fileName;
}
spl_autoload_register('autoload');
$dbcon = new dbcon;

require 'functions.php';
