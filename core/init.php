<?php/*
*Create autoloader for our classes
*/
require_once('config/config.php');

//Autoload Classes
function __autoload($class_name){
  require_once('libraries/' . $class_name . '.php');
}

?>
