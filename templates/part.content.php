<form id="background">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control update" id="name" name="name" value="<?php p($_['name']); ?>" placeholder="Your name"/>
    <label id="name-status"></label>
    </div>
  </div>
  <div class="form-group">
    <label for="age" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-10">
    <input type="number" class="form-control update" id="age" name="age" value="<?php p($_['age']); ?>" placeholder="Your age"/>
    <label id="age-status"></label>
    </div>
  </div>
  <div class="form-group">
    <label for="gender" class="col-sm-2 control-label update">Gender</label>
    <div class="col-sm-10">
    <select class="form-control" id="gender" name="gender">
      <option value="male" <?php if (($_['gender']) == 'male') echo ' selected="selected"'; ?>>male</option>
      <option value="female" <?php if (($_['gender']) == 'female') echo ' selected="selected"'; ?>>female</option>
      <option value="other" <?php if (($_['gender']) == 'other') echo ' selected="selected"'; ?>>other</option>
    </select>
    <label id="gender-status"></label>
    </div>
  </div>
    <div class="form-group">
    <label for="addr" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
    <input type="text" class="form-control update" id="addr" name="addr" value="<?php p($_['addr']); ?>" placeholder="Your residence"/>
    <label id="addr-status"></label>
    </div>
  </div>
</form>


