<?php
/*
*Function formatDate
*/
function formatDate($date){
  $date = date("F j, Y, g:i a",strtotime($date));
  return $date; 
}



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
