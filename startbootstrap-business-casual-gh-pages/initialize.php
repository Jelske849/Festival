<?php 
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/PUBLIC');
define("SHARED_PATH", PRIVATE_PATH . '/SHARED');

define("WWW_ROOT", 'http://localhost/startbootstrap-business-casual-gh-pages/');

// $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
// $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
// define("WWW_ROOT", $doc_root);




require_once('functions.php');
require_once('database.php');

$db = db_connect();
session_start();
?>