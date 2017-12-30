<?php
  include 'conn.php';
?>
<?php
  $error = "";
  $msg = "";
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(username, name, email, password) VALUES('$username', '$name', '$email', '$password')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
      $error = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Database querying failed</div>';
    } else {
      $msg = '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Registration was successful, account has been created</div>';
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="screen">
      form#form {
        border: 1px solid #f2f2f2;
        padding: 2em;
        box-shadow: 0 1px 4px #069;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <h1 class="text-center">Simple PHP Registration Form</h1><br>
    <section id="form">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-3">
          </div>
          <div class="col-xs-12 col-sm-5 col-md-4 col-lg-5 col-lg-offset-1">
            <form action="registration.php" method="POST" role="form" class="form-horizontal" id="form">
              <div class="form-group">
              <legend>Ikayz Registration</legend>
              </div>
              <div class="form-group"><?php echo $error; echo $msg; ?></div>
              <div class="form-group">
                <label for="">Username:</label>
                <input type="text" class="form-control" name="username" id="" placeholder="Input field">
              </div>
              <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Input field">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="" placeholder="Input field">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" placeholder="Input field">
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-1">
          </div>
        </div>
      </div>
    </section>
    <?php mysqli_close($conn); ?>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="Hello World"></script>
  </body>
</html>
