<p>Hello World <?php p($_['user']) ?></p>

<p><button id="hello">click me</button></p>

<p><textarea id="echo-content">
	Send this as ajax
</textarea></p>
<p><button id="echo">Send ajax request</button></p>

Ajax response: <div id="echo-result"></div>

<form id="background">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control update" id="name" name="name" value="<?php p($_['name']); ?>" placeholder="Your name"/>
    </div>
  </div>
  <div class="form-group">
    <label for="age" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-10">
    <input type="number" class="form-control update" id="age" name="age" value="<?php p($_['age']); ?>" placeholder="Your age"/>
    </div>
  </div>
  <div class="form-group">
    <label for="gender" class="col-sm-2 control-label update">Gender</label>
    <div class="col-sm-10">
    <select class="form-control" id="gender" name="gender" value="<?php p($_['gender']); ?>">
      <option>male</option>
      <option>female</option>
      <option>other</option>
    </select>
    </div>
  </div>
    <div class="form-group">
    <label for="addr" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
    <input type="text" class="form-control update" id="addr" name="addr" value="<?php p($_['addr']); ?>" placeholder="Your residence"/>
    </div>
  </div>
</form>

