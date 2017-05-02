<?php require ('core/init.php'); ?>

<?php
// Get Template and Assign Vars
  $template = new Template('templates/frontpage.php');

//Assign Vars
  $template->heading = "This is a template heading";

  echo $template;
?>
