<?php
  $name = '';
  $email = '';
  $subject = '';
  $comments = '';
  $result = '';
  $skill1 = '';
  $skill2 = '';
  $skill3 = '';
  $skill4 = '';
  $style_red = 'color: red';

  if (isset($_POST['validate'])) {
    if(empty($_POST['name'])) {
        $name = "<span style=\"$style_red\">" . "Name field is empty" . "</span";
    } else {
        $name = trim(htmlspecialchars($_POST['name']));
    }

    if(!empty($_POST['email'])) {
        $email = strip_tags(trim($_POST['email']));
    } else {
        $email = "<span style=\"$style_red\">" . "Email field is empty" . "</span>";
    }

    if(empty($_POST['subject'])) {
        $subject = "<span style=\"$style_red\">" . "Subject field is empty" . "</span>";
    } else {
        $subject = htmlspecialchars($_POST['subject']);
    }

    $comments = trim(htmlspecialchars($_POST['comments']));

  } else {
    $result = "Did not receive any request!";
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
        <td>
          Male<br>
          Female
        </td>
        <td>
          <input type="radio" value="male" name="gender"><br>
          <input type="radio" value="female" name="gender">
        </td>
      </tr>
      <tr>
        <td>Country</td>
        <td>
          <select name="skills">
            <option value="selected">--Select Country--</option>
            <option value="angola">Angola</option>
            <option value="botswana">Botswana</option>
            <option value="namibia">Namibia</option>
            <option value="malawi">Malawi</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Skills</td>
        <td>
          <input type="checkbox" name="skill1"> JavaScript<br>
          <input type="checkbox" name="skill2"> NodeJS<br>
          <input type="checkbox" name="skill3"> React<br>
          <input type="checkbox" name="skill4"> Angular<br>
        </td>
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
    <strong>Comments: <br> <?php echo $comments; ?></strong>
    <p><?php echo $result; ?></p>
  </form>
</body>
</html>
