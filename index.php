<?php include'includes/conn.php';?>
<?php include'includes/header.php';?>
<body>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Access</th>
        <th>Delete</th>
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
                      <td>' . $rows['gender'] . '</td>
                      <td>' . $rows['country'] . '</td>
                      <td><a href="detail.php?user_id=' . $row['id'] . '">Access</a></td>
                      <td>Delete</td>
                    </tr>
              ';
            }
        ?>
      </tbody>
    </table>
  </div>
<?php include'includes/footer.php'; ?>
