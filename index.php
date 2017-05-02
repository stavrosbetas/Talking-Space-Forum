<?php require ('core/init.php'); ?>

<?php
//Create Topic Object
$topic = new Topic;


// Get Template and Assign Vars
  $template = new Template('templates/frontpage.php');

//Assign Vars
  $template->topics = $topic->getAllTopics();

  echo $template;
?>
