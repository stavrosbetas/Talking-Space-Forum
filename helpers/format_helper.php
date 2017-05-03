<?php 
/*
*Url Format Function
*/

function urlformat($str){
  // Strip ut all whitespace
  $str = preg_replace('/\s*/','',$str);

  //Convert the string to lowercase
  $str = strtolower($str);

  //Url Encode
  $str = urlencode($str);
  return $str;
}
