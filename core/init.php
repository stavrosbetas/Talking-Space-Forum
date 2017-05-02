<?php/*
*Create autoloader for our classes
*/

//Include Configuration
require_once('config/config.php');

//Autoload Classes
function __autoload($class_name){
  require_once('libraries/' . $class_name . '.php');
}

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

?>
