<?php include'includes/header.php'; ?>

<div class="container">
  <h1>Submit</h1>
  <form role="form">
    <div class="form-group row">
      <label for="name" class="control-label col-sm-1 text-right">Name</label>
      <div class="col-sm-3">
        <input type="text" name="name" id="name" class="form-control" placeholder="Type name" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="control-label col-sm-1 text-right">Email</label>
      <div class="col-sm-3">
        <input type="email" name="email" id="email" class="form-control" placeholder="example@someone.com" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="subject" class="control-label col-sm-1 text-right">Subject</label>
      <div class="col-sm-3">
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject" required>
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
      <label for="subject" class="control-label col-sm-1 text-right">Skills</label>
      <div class="col-sm-6">
        <label><input type="checkbox" name="skill1" id="skills" class="checkbox-inline"> JavaScript</label>
        <label><input type="checkbox" name="skill2" id="skills" class="checkbox-inline"> Node JS</label>
        <label><input type="checkbox" name="skill3" id="skills" class="checkbox-inline"> React</label>
        <label><input type="checkbox" name="skill4" id="skills" class="checkbox-inline"> PHP</label>
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
        <textarea class="form-control" name="comments" id="" rows="3" placeholder="Type your comments here"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="control-label col-sm-1 text-right"></label>
      <div class="col-sm-3">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php include'includes/footer.php'; ?>
