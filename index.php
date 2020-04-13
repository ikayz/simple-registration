<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <tr>
        <td>Name: </td>
        <td><input type="text" name="name"/></td>
      </tr>
      <tr>
        <td>Email: </td>
        <td><input type="email" name="email"/></td>
      </tr>
      <tr>
        <td>Subject: </td>
        <td><input type="text" name="subject"/></td>
      </tr>
      <tr>
        <td>Comments: </td>
        <td><textarea name="comments"></textarea></td>
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
    echo "Name: " . trim(htmlspecialchars($_POST['name'])) . "<br>";
    echo "Email: " . trim(htmlspecialchars($_POST['email'])) . "<br>";
    echo "Subject: " . trim(htmlspecialchars($_POST['subject'])) . "<br>";
    echo "Comments: " . trim(htmlspecialchars($_POST['comments']));
  } else {
    echo "Did not receive any request!";
  }
?>
