<?php include'includes/conn.php';?>
<?php include'includes/header.php';?>
<body>
  <div class="container">
    <div class="jumbotron">
      <h1>User Details</h1>
      <p>Below are some user details</p>
    </div>
    <?php
      $sql = "SELECT * FROM comments";

      $run_query = mysqli_query($conn, $sql);
      while ($rows = mysqli_fetch_assoc($run_query)) {
        echo '
            <div class="row">
              <strong class="col-md-3">Name: </strong>
              <p class="col-md-3">Frodo</p>
            </div>
            <div class="row">
              <strong class="col-md-3">Email: </strong>
              <p class="col-md-3">frodo@middle.com</p>
            </div>
            <div class="row">
              <strong class="col-md-3">Subject: </strong>
              <p class="col-md-3">Frodo of the Shire</p>
            </div>
            <div class="row">
              <strong class="col-md-3">Gender: </strong>
              <p class="col-md-3">Male</p>
            </div>
            <div class="row">
              <strong class="col-md-3">Skills: </strong>
              <p class="col-md-3">Ring bearer</p>
            </div>
            <div class="row">
              <strong class="col-md-3">Country: </strong>
              <p class="col-md-3">The Shire</p>
            </div>
            <div class="row">
              <strong class="col-md-3">Comments: </strong>
              <p class="col-md-3">He is a good lad</p>
            </div>
        ';
      }
    ?>
  </div>
<?php include'includes/footer.php'; ?>
