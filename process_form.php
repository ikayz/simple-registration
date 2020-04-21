<?php
  if (isset($_POST['submit'])) {
      $name = trim(htmlspecialchars($_POST['name']));
      $email = strip_tags(trim($_POST['email']));
      $subject = htmlspecialchars($_POST['subject']);
      $gender = strip_tags($_POST['gender']);
      $country = strip_tags($_POST['country']);
      $comments = trim(htmlspecialchars($_POST['comments']));


  } else {
    # code...
  }

?>
