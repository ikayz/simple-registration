<?php
  if (isset($_POST['validate'])) {
    echo "Username: {$_POST['login_email']}<br>";
    echo "Password: {$_POST['login_password']}";
  } else {
    echo "Did not receive any request!";
  }
?>
