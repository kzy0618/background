<form id="background">

<div id="Generaldata">
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
		    <textarea class="form-control update" id="addr" name="addr" placeholder="Your residence"><?php p($_['addr']); ?></textarea>
		    <label id="addr-status"></label>
		    </div>
	</div> 	
	<div>
		<button id="previous" disabled>Previous</button>
		<button id="next">Next</button>	    
	</div>
</div>

<div id="Englishprofil" class="hidden">
  	<div class="form-group">
		    <label for="eprofil" class="col-sm-2 control-label update">English profil</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="eprofil" name="eprofil">
		      <option value="L1" <?php if (($_['eprofil']) == 'L1') echo ' selected="selected"'; ?>>L1</option>
		      <option value="L2" <?php if (($_['eprofil']) == 'L2') echo ' selected="selected"'; ?>>L2</option>
		      <option value="other" <?php if (($_['eprofil']) == 'other') echo ' selected="selected"'; ?>>other</option>
		    </select>
		    <label id="eprofil-status"></label>
		    </div>
	</div>
  	<div class="form-group">
		    <label for="etype" class="col-sm-2 control-label update">if English profil = L1 select :</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="etype" name="etype">
		      <option value="English(Australia)" <?php if (($_['etype']) == 'English(Australia)') echo ' selected="selected"'; ?>>English (Australia)</option>
		      <option value="English(Belize)" <?php if (($_['etype']) == 'English(Belize)') echo ' selected="selected"'; ?>>English (Belize)</option>
		      <option value="English(Canada)" <?php if (($_['etype']) == 'English(Canada)') echo ' selected="selected"'; ?>>English (Canada)</option>
		      <option value="English(Caribbean)" <?php if (($_['etype']) == 'English(Caribbean)') echo ' selected="selected"'; ?>>English (Caribbean)</option>
		      <option value="English(Ghana)" <?php if (($_['etype']) == 'English(Ghana)') echo ' selected="selected"'; ?>>English (Ghana)</option>
		      <option value="English(India)" <?php if (($_['etype']) == 'English(India)') echo ' selected="selected"'; ?>>English (India)</option>
 		      <option value="English(Ireland)" <?php if (($_['etype']) == 'English(Ireland)') echo ' selected="selected"'; ?>>English (Ireland)</option>
		      <option value="English(Jamaica)" <?php if (($_['etype']) == 'English(Jamaica)') echo ' selected="selected"'; ?>>English (Jamaica)</option>
		      <option value="English(Malawi)" <?php if (($_['etype']) == 'English(Malawi)') echo ' selected="selected"'; ?>>English (Malawi)</option>
		      <option value="English(Namibia)" <?php if (($_['etype']) == 'English(Namibia)') echo ' selected="selected"'; ?>>English (Namibia)</option>
		      <option value="English(NewZeland)" <?php if (($_['etype']) == 'English(NewZeland)') echo ' selected="selected"'; ?>>English (New Zeland)</option>
		      <option value="English(Philippines)" <?php if (($_['etype']) == 'English(Philippines)') echo ' selected="selected"'; ?>>English (Philippines)</option>
 		      <option value="English(SouthAFrica)" <?php if (($_['etype']) == 'English(SouthAFrica)') echo ' selected="selected"'; ?>>English (South AFrica)</option>
		      <option value="English(Trinidad)" <?php if (($_['etype']) == 'English(Trinidad)') echo ' selected="selected"'; ?>>English (Trinidad)</option>
		      <option value="English(UK)" <?php if (($_['etype']) == 'English(UK)') echo ' selected="selected"'; ?>>English (UK)</option>
		      <option value="English(USA)" <?php if (($_['etype']) == 'English(USA)') echo ' selected="selected"'; ?>>English (USA)</option>
		      <option value="English(Zimbabwe)" <?php if (($_['etype']) == 'English(Zimbabwe)') echo ' selected="selected"'; ?>>English (Zimbabwe)</option>
		      <option value="other" <?php if (($_['etype']) == 'other') echo ' selected="selected"'; ?>>other</option>
		    </select>
		    <label id="etype-status"></label>
		    </div>
	</div>
	<div class="form-group">
		    <label for="eexposure" class="col-sm-2 control-label update">if English profil = L2 select :</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="eexposure" name="eexposure">
		      <option value="casual" <?php if (($_['eexposure']) == 'casual') echo ' selected="selected"'; ?>>casual</option>
		      <option value="intermediate" <?php if (($_['eexposure']) == 'intermediate') echo ' selected="selected"'; ?>>intermediate</option>
		      <option value="advanced" <?php if (($_['eexposure']) == 'advanced') echo ' selected="selected"'; ?>>advanced</option>
		      <option value="fluent" <?php if (($_['eexposure']) == 'fluent') echo ' selected="selected"'; ?>>fluent</option>
		    </select>
		    <label id="eexposure-status"></label>
		    </div>
	</div>
    	<div class="form-group">
		    <label for="edetail" class="col-sm-2 control-label">Detail</label>
		    <div class="col-sm-10">
		    <textarea class="form-control" id="edetail" name="edetail" placeholder="Give us a few details : In which English speaking contry have you lived and for how long ?" rows="7" cols="100"><?php p($_['edetail']); ?></textarea>
		    <label id="edetail-status"></label>
		    </div>
	</div>
	<div class="form-group">
		<button id="previous2">Previous</button>
		<button id="next2">Next</button>
	</div> 	
</div>
<div id="Maoriprofil" class="hidden">
  	<div class="form-group">
		    <label for="mprofil" class="col-sm-2 control-label update">Maori profil</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="mprofil" name="mprofil">
		      <option value="L1" <?php if (($_['mprofil']) == 'L1') echo ' selected="selected"'; ?>>L1</option>
		      <option value="L2" <?php if (($_['mprofil']) == 'L2') echo ' selected="selected"'; ?>>L2</option>
		      <option value="other" <?php if (($_['mprofil']) == 'other') echo ' selected="selected"'; ?>>other</option>
		    </select>
		    <label id="mprofil-status"></label>
		    </div>
	</div>
  	<div class="form-group">
		    <label for="mtype" class="col-sm-2 control-label update">if Maori profil = L1 select :</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="mtype" name="mtype">
		      <option value="Maori(NorthIsland)" <?php if (($_['mtype']) == 'Maori(NorthIsland)') echo ' selected="selected"'; ?>>Maori (NorthIsland)</option>
		      <option value="Maori(SouthIsland)" <?php if (($_['mtype']) == 'Maori(SouthIsland)') echo ' selected="selected"'; ?>>Maori (SouthIsland)</option>
		      <option value="other" <?php if (($_['mtype']) == 'other') echo ' selected="selected"'; ?>>other</option>
		    </select>
		    <label id="mtype-status"></label>
		    </div>
	</div>
	<div class="form-group">
		    <label for="mexposure" class="col-sm-2 control-label update">if Maori profil = L2 select :</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="mexposure" name="mexposure">
		      <option value="casual" <?php if (($_['mexposure']) == 'casual') echo ' selected="selected"'; ?>>casual</option>
		      <option value="intermediate" <?php if (($_['mexposure']) == 'intermediate') echo ' selected="selected"'; ?>>intermediate</option>
		      <option value="advanced" <?php if (($_['mexposure']) == 'advanced') echo ' selected="selected"'; ?>>advanced</option>
		      <option value="fluent" <?php if (($_['mexposure']) == 'fluent') echo ' selected="selected"'; ?>>fluent</option>
		    </select>
		    <label id="mexposure-status"></label>
		    </div>
	</div>
    	<div class="form-group">
		    <label for="mdetail" class="col-sm-2 control-label">Detail</label>
		    <div class="col-sm-10">
		    <textarea class="form-control" id="mdetail" name="mdetail" placeholder="Give us a few details : In which part of New Zeland have you lived and for how long ?" rows="7" cols="100"><?php p($_['mdetail']); ?></textarea>
		    <label id="mdetail-status"></label>
		    </div>
	</div>
	<div class="form-group">
		<button id="previous3">Previous</button>
		<button id="next3" disabled>Next</button>
	</div> 	
</div>
</form>


