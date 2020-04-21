<?php
  include'includes/conn.php';

  if (isset($_POST['submit'])) {
      $name = trim(htmlspecialchars($_POST['name']));
      $email = strip_tags(trim($_POST['email']));
      $subject = htmlspecialchars($_POST['subject']);
      $gender = strip_tags($_POST['gender']);
      $country = strip_tags($_POST['country']);
      $comments = trim(htmlspecialchars($_POST['comments']));

      if(empty($_POST['skill1'])) {
          $_POST['skill1'] = '';
      }
      if(empty($_POST['skill2'])) {
          $_POST['skill2'] = '';
      }
      if(empty($_POST['skill3'])) {
          $_POST['skill3'] = '';
      }
      if(empty($_POST['skill4'])) {
          $_POST['skill4'] = '';
      }

      $insert_sql  = "INSERT INTO comments ";
      $insert_sql .= "('name','email_address','subject','gender'";
      $insert_sql .= ",'skill1','skill2','skill3','skill4','country','comments')";
      $insert_sql .= "VALUES ('$name','$email','$subject','$gender'";
      $insert_sql .= ",'$_POST[skill1],'$_POST[skill2]','$_POST[skill3]','$_POST[skill4]','$country','$comments')";
  } else {
    # code...
  }

?>
