<?php include'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retrieving Data from MySQL</title>
</head>
<body>
  <table>
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Skills</th>
      <th>Gender</th>
      <th>Country</th>
    </thead>
    <tbody>
      <?php
          $sql = "SELECT * FROM comments";
          $run_sql = mysqli_query($conn, $sql);
          while($rows = mysqli_fetch_assoc($run_sql)) {
            echo $rows['comments'];
          }
      ?>
    </tbody>
  </table>
</body>
</html>
