<?php include'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retrieving Data from MySQL</title>
</head>
<body>
  <table border="1">
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
            echo '<tr>
                    <td>' . $rows['id'] . '</td>
                    <td>' . $rows['name'] . '</td>
                    <td>' . $rows['email_address'] . '</td>
                    <td>' . $rows['skill1'] . ',' . $rows['skill2'] . ',' . $rows['skill3'] . ',' .  $rows['skill4'] . '</td>
                    <td>' . $rows['gender'] . '</td>
                    <td>' . $rows['country'] . '</td>
                  </tr>
            ';
          }
      ?>
    </tbody>
  </table>
</body>
</html>
