<?php
  define("SERVER", "localhost"); // Replace localhost with your server name
  define("USER", "root"); // Replace root with your user account
  define("PASS", ""); // Include password if your server has one
  define("DB_NAME", "simple_db"); // Replace simple db with your database name

  $conn = mysqli_connect(SERVER, USER, PASS, DB_NAME);
    if (!$conn) {
      $error = die("Connection to the database failed");
    } else {
      $msg = "Database connection succesful";
    }
?>
