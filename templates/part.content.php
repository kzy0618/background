<?php
script('background', 'settings');
?>

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
    <input type="text" class="form-control" id="name" name="name" value="<?php p($_['user']); ?>" placeholder="Your name" onblur="saveSettings(this)" />
    </div>
  </div>
  <div class="form-group">
    <label for="age" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="age" name="age" placeholder="Your age" onblur="saveSettings(this)" />
    </div>
  </div>
  <div class="form-group">
    <label for="gender" class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-10">
    <select class="form-control" id="gender" name="gender" onblur="saveSettings(this)">
      <option>male</option>
      <option>female</option>
      <option>other</option>
    </select>
    </div>
  </div>
    <div class="form-group">
    <label for="addr" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="addr" name="addr" placeholder="Your residence" onblur="saveSettings(this)">
    </div>
  </div>
</form>

