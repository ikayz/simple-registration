<?php include'includes/conn.php';?>
<?php include'includes/header.php';?>
<body>
  <div class="container">
    <?php
      if(isset($_GET['user_id'])) {
        $sql = "SELECT * FROM comments WHERE id = '$_GET[user_id]' ";
        $run_query = mysqli_query($conn, $sql);
        while ($rows = mysqli_fetch_assoc($run_query)) {
          echo '
              <div class="jumbotron">
                <h1>User Details</h1>
                <p>Below are some user details</p>
                <a class="btn btn-warning btn-sm" href="other_form.php?edit_id=' . $rows['id'] . ' ">Edit</a>
              </div>
              <div class="row">
                <strong class="col-md-3">Name: </strong>
                <p class="col-md-3">' . $rows['name'] . '</p>
              </div>
              <div class="row">
                <strong class="col-md-3">Email: </strong>
                <p class="col-md-3">' . $rows['email_address'] . '</p>
              </div>
              <div class="row">
                <strong class="col-md-3">Subject: </strong>
                <p class="col-md-3">' . $rows['subject'] . '</p>
              </div>
              <div class="row">
                <strong class="col-md-3">Gender: </strong>
                <p class="col-md-3">' . $rows['gender'] . '</p>
              </div>
              <div class="row">
                <strong class="col-md-3">Skills: </strong>
                <p class="col-md-3"></p>
              </div>
              <div class="row">
                <strong class="col-md-3">Country: </strong>
                <p class="col-md-3">' . $rows['country'] . '</p>
              </div>
              <div class="row">
                <strong class="col-md-3">Comments: </strong>
                <p class="col-md-3">' . $rows['comments'] . '</p>
              </div>
          ';
        }
      }
    ?>
  </div>
<?php include'includes/footer.php'; ?>
