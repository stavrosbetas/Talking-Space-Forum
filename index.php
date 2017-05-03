<?php require ('core/init.php'); ?>

<?php
//Create Topic Object
$topic = new Topic;


// Get Template and Assign Vars
  $template = new Template('templates/frontpage.php');


//Assign Vars
  $template->topics = $topic->getAllTopics();
  $template->totalTopics = $topic->getTotalTopics();
  $template->totalCategories = $topic->getTotalCategories();
  $template->totalUsers = $topic->getTotalUsers();


  //Display Template
  echo $template;
?>
