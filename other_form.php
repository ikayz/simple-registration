<?php include'includes/header.php'; ?>

<div class="container">
  <h1>Submit</h1>
  <form role="form">
    <div class="form-group row">
      <label for="name" class="control-label col-sm-1 text-right">Name</label>
      <div class="col-sm-3">
        <input type="text" name="" id="name" class="form-control" placeholder="Type name" aria-describedby="helpId">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="control-label col-sm-1 text-right">Email</label>
      <div class="col-sm-3">
        <input type="email" name="" id="email" class="form-control" placeholder="example@someone.com" aria-describedby="helpId">
      </div>
    </div>
    <div class="form-group row">
      <label for="subject" class="control-label col-sm-1 text-right">Subject</label>
      <div class="col-sm-3">
        <input type="text" name="" id="subject" class="form-control" placeholder="Your subject" aria-describedby="helpId">
      </div>
    </div>
    <div class="form-group row">
      <label for="gender" class="control-label col-sm-1 text-right">Gender</label>
      <div class="col-sm-3">
        <select class="form-control" name="" id="gender">
          <option value="selected">-- Select Gender --</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="subject" class="control-label col-sm-1 text-right">Skills</label>
      <div class="col-sm-6">
        <label><input type="checkbox" name="" id="skills" class="checkbox-inline" aria-describedby="helpId"> JavaScript</label>
        <label><input type="checkbox" name="" id="skills" class="checkbox-inline" aria-describedby="helpId"> Node JS</label>
        <label><input type="checkbox" name="" id="skills" class="checkbox-inline" aria-describedby="helpId"> React</label>
        <label><input type="checkbox" name="" id="skills" class="checkbox-inline" aria-describedby="helpId"> PHP</label>
      </div>
    </div>
    <div class="form-group row">
      <label for="gender" class="control-label col-sm-1 text-right">Country</label>
      <div class="col-sm-3">
        <select class="form-control" name="" id="gender">
          <option value="selected">-- Select Country --</option>
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
        <textarea class="form-control" name="" id="" rows="3" placeholder="Type your comments here"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="control-label col-sm-1 text-right"></label>
      <div class="col-sm-3">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php include'includes/footer.php'; ?>
