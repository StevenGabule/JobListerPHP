<?php 
ob_start();
$webroot = "C:xampp/htdocs";
define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', $webroot.DS.'WEBPRO-PHP');
define('INCLUDES_PATH', SITE_ROOT.DS.'include');
require_once(INCLUDES_PATH.DS."helper.php");
require_once(INCLUDES_PATH.DS."new_config.php");
require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."Jobs.php");
require_once(INCLUDES_PATH.DS."Category.php");
?>