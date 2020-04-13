<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <tr>
        <td>Email: </td>
        <td><input type="email" name="login_email"/></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td><input type="password" name="login_password"/></td>
      </tr>
      <tr>
        <td><input type="hidden" value="yes" name="validate"></td>
        <td><input type="submit" name="submit"></td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
  if (isset($_POST['validate'])) {
    echo "Username: {$_POST['login_email']}<br>";
    echo "Password: {$_POST['login_password']}";
  } else {
    echo "Did not receive any request!";
  }
?>
