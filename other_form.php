<?php
  include'includes/conn.php';
  if(isset($_GET['edit_id'])) {
      $edit_sql = "SELECT * FROM comments WHERE id = '$_GET[edit_id]'";
      $run_query = mysqli_query($conn, $edit_sql);
      while($rows = mysqli_fetch_assoc($run_query)) {
        $name = $rows['name'];
        $email = $rows['email_address'];
        $subject = $rows['subject'];
        $gender = $rows['gender'];
        $country = $rows['country'];
        $comments = $rows['comments'];
      }
  } else {
      $name = "";
      $email = "";
      $subject = "";
      $gender = "";
      $country = "";
      $comments = "";
  }
?>
<?php include'includes/header.php'; ?>

<div class="container">
  <h1>Submit</h1>
  <form role="form" action="process_form.php" method="post">
    <div class="form-group row">
      <label for="name" class="control-label col-sm-1 text-right">Name</label>
      <div class="col-sm-3">
        <input type="text" name="name" value="<?php echo $name; ?>" id="name" class="form-control" placeholder="Type name" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="control-label col-sm-1 text-right">Email</label>
      <div class="col-sm-3">
        <input type="email" name="email" value="<?php echo $email; ?>" id="email" class="form-control" placeholder="example@someone.com" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="subject" class="control-label col-sm-1 text-right">Subject</label>
      <div class="col-sm-3">
        <input type="text" name="subject" value="<?php echo $subject; ?>" id="subject" class="form-control" placeholder="Your subject" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="gender" class="control-label col-sm-1 text-right">Gender</label>
      <div class="col-sm-3">
        <select class="form-control" name="gender" id="gender" required>
          <option value="">-- Select Gender --</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="skills" class="control-label col-sm-1 text-right">Skills</label>
      <div class="col-sm-6">
        <label class="checkbox-inline"><input type="checkbox" name="skill1" id="skills" value="JavaScript"> JavaScript</label>
        <label class="checkbox-inline"><input type="checkbox" name="skill2" id="skills" value="NodeJS"> Node JS</label>
        <label class="checkbox-inline"><input type="checkbox" name="skill3" id="skills" value="React"> React</label>
        <label class="checkbox-inline"><input type="checkbox" name="skill4" id="skills" value="PHP"> PHP</label>
      </div>
    </div>
    <div class="form-group row">
      <label for="gender" class="control-label col-sm-1 text-right">Country</label>
      <div class="col-sm-3">
        <select class="form-control" name="country" id="gender" required>
          <option value="">-- Select Country --</option>
          <option value="angola">Angola</option>
          <option value="botswana">Botswana</option>
          <option value="canada">Cananda</option>
          <option value="zambia">Zambia</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="comments" class="control-label col-sm-1 text-right">Comments</label>
      <div class="col-sm-3">
        <textarea class="form-control" name="comments" value="" id="" rows="3" placeholder="Type your comments here">
        <?php echo $comments; ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="control-label col-sm-1 text-right"></label>
      <div class="col-sm-3">
        <input type="submit" class="btn btn-primary" name="submit" value="submit">
      </div>
    </div>
  </form>
</div>

<?php include'includes/footer.php'; ?>
