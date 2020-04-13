<?php
  if (isset($_POST['validate'])) {
    if(empty($_POST['name'])) {
        $name = "Name field is empty";
    } else {
        $name = trim(htmlspecialchars($_POST['name']));
    }

    if(!empty($_POST['email'])) {
        $email = strip_tags(trim($_POST['email']));
    } else {
        $email = "Email field is empty";
    }

    if(empty($_POST['subject'])) {
        $subject = "Subject field is empty";
    } else {
        $subject = htmlspecialchars($_POST['subject']);
    }

    echo "Comments: " . trim(htmlspecialchars($_POST['comments']));
  } else {
    echo "Did not receive any request!";
  }
?>

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
        <td><input type="text" name="name"/><?php echo $name; ?></td>
      </tr>
      <tr>
        <td>Email: </td>
        <td><input type="email" name="email"/><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>Subject: </td>
        <td><input type="text" name="subject"/><?php echo $subject; ?></td>
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
