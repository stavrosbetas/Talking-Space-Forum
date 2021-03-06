<?php

/*
*Database helper function // Get # replies of topic
*/
//Test
function replyCount($topic_id){
  $db = new Database;
  $db->query("SELECT * FROM replies WHERE topic_id = :topic_id");
  $db->bind('topic_id', $topic_id);

  //Assign Rows
  $rows = $db->resultset();

  //Get Count
  return $db->rowCount();

}
/*
* Get Categories
*/
function getCategories(){
  $db = new Database;
  $db->query("SELECT * FROM categories");
  //Assign the result Set
  $results = $db->resultset();

  return $results;
}
