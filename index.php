<?php include'includes/conn.php';
  if(isset($_GET['delete_id'])) {
    $delete_sql = "DELETE FROM comments WHERE id = '$_GET[delete_id]'";
    $run_query = mysqli_query($conn, $delete_sql);
  }
?>
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
                      <td>' . $rows['gender'] . '</td>';
                      $select_country = "SELECT * FROM countries WHERE country_code = '$rows[country]'";
                      $run_query = mysqli_query($conn, $select_country);
                      while ($country_rows = mysqli_fetch_assoc($run_query)) {
                          echo '<td>' . $country_rows['country_name'] . '</td>';
                      }
                      echo '<td><a class="btn btn-primary btn-sm" href="detail.php?user_id=' . $rows['id'] . '">Access</a></td>
                      <td><a class="btn btn-danger btn-sm" href="index.php?delete_id=' . $rows['id'] . '">Delete</a></td>
                    </tr>
              ';
            }
        ?>
      </tbody>
    </table>
  </div>
<?php include'includes/footer.php'; ?>
