<?php
  include'includes/conn.php';

  if (isset($_POST['submit'])) {
      $name = strip_tags($_POST['name']);
      $email = strip_tags($_POST['email']);
      $subject = htmlspecialchars($_POST['subject']);
      $gender = $_POST['gender'];
      $country = $_POST['country'];
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
      $insert_sql .= "(name, email_address, subject, gender";
      $insert_sql .= ", skill1, skill2, skill3, skill4, country, comments)";
      $insert_sql .= "VALUES ('$name','$email','$subject','$gender'";
      $insert_sql .= ",'$_POST[skill1]','$_POST[skill2]','$_POST[skill3]','$_POST[skill4]','$country','$comments')";

      $run_sql = mysqli_query($conn, $insert_sql);

      if ($run_sql == 1) {
          echo "<script>alert('Successfully inserted record!')</script>";
      } else {
          echo "<script>alert('Failed to insert record!')</script>";
      }

  } else {
    echo "Error connecting to the database" . mysqli_connect_error();
  }

?>
