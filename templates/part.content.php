<form id="background">
<!-- First page -->
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
		    <label for="addr" class="col-sm-2 control-label update">Location</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="addr" name="addr">
		      <option value="Northland" <?php if (($_['addr']) == 'Northland') echo ' selected="selected"'; ?>>Northland</option>
		      <option value="Auckland" <?php if (($_['addr']) == 'Auckland') echo ' selected="selected"'; ?>>Auckland</option>
		      <option value="Waikato" <?php if (($_['addr']) == 'Waikato') echo ' selected="selected"'; ?>>Waikato</option>
		      <option value="Bay of Plenty" <?php if (($_['addr']) == 'Bay of Plenty') echo ' selected="selected"'; ?>>Bay of Plenty</option>
		      <option value="Gisborne" <?php if (($_['addr']) == 'Gisborne') echo ' selected="selected"'; ?>>Gisborne</option>
		      <option value="Hawke Bay" <?php if (($_['addr']) == 'Hawke Bay') echo ' selected="selected"'; ?>>Hawke Bay</option>
		      <option value="Taranaki" <?php if (($_['addr']) == 'Taranaki') echo ' selected="selected"'; ?>>Taranaki</option>
		      <option value="Manawatu-Wanganui" <?php if (($_['addr']) == 'Manawatu-Wanganui') echo ' selected="selected"'; ?>>Manawatu-Wanganui</option>
		      <option value="Wellington" <?php if (($_['addr']) == 'Wellington') echo ' selected="selected"'; ?>>Wellington</option>
		      <option value="Marlborough" <?php if (($_['addr']) == 'Marlborough') echo ' selected="selected"'; ?>>Marlborough</option>
		      <option value="Tasman" <?php if (($_['addr']) == 'Tasman') echo ' selected="selected"'; ?>>Tasman</option>
		      <option value="West Coast" <?php if (($_['addr']) == 'West Coast') echo ' selected="selected"'; ?>>West Coast</option>
		      <option value="Canterbury" <?php if (($_['addr']) == 'Canterbury') echo ' selected="selected"'; ?>>Canterbury</option>
		      <option value="Otago" <?php if (($_['addr']) == 'Otago') echo ' selected="selected"'; ?>>Otago</option>
		      <option value="Southland" <?php if (($_['addr']) == 'Southland') echo ' selected="selected"'; ?>>Southland</option>
		      <option value="other" <?php if (($_['addr']) == 'other') echo ' selected="selected"'; ?>>other</option>
		    </select>
		    <label id="addr-status"></label>
		    </div>
	</div>
<!-- Here you can put new variables for General data -->
	<div>
		<button id="previous" disabled>Previous</button>
		<button id="next">Next</button>	    
	</div>
</div>
<!-- Second page -->
<div id="Englishprofil" class="hidden">
  	<div class="form-group">
		    <label for="eprofil" class="col-sm-2 control-label update">English profile</label>
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
		    <label for="etype" class="col-sm-2 control-label update">if English profile = L1 select :</label>
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
		    <label for="eexposure" class="col-sm-2 control-label update">if English profile = L2 select :</label>
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
		    <label for="nztime" class="col-sm-2 control-label">For how long time do(did) you live in New Zealand ?</label>
		    <div class="col-sm-10">
		    <input type="number" class="form-control update" id="nztime" name="nztime" value="<?php p($_['nztime']); ?>" placeholder="Living Time"/>
		    <label id="nztime-status"></label>
		    </div>
 	</div>
    	<div class="form-group">
		    <label for="edetail" class="col-sm-2 control-label">Detail</label>
		    <div class="col-sm-10">
		    <textarea class="form-control" id="edetail" name="edetail" placeholder="Give us a few details : In which English speaking contry have you lived and for how long ?" rows="7" cols="100"><?php p($_['edetail']); ?></textarea>
		    <label id="edetail-status"></label>
		    </div>
	</div>
<!-- Here you can put new variables for English profile -->
	<div class="form-group">
		<button id="previous2">Previous</button>
		<button id="next2">Next</button>
	</div> 	
</div>
<!-- Third page -->
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
		    <label for="mtype" class="col-sm-2 control-label update">if Maori profile = L1 select :</label>
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
		    <label for="mexposure" class="col-sm-2 control-label update">if Maori profile = L2 select :</label>
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
<!-- Here you can put new variables for maori profile -->
	<div class="form-group">
		<button id="previous3">Previous</button>
		<button id="next3" disabled>Next</button>
	</div> 	
</div>
</form>

<!-- Help for devellopers 

For each new variable put a divison describing an input, a selection or a text area in the associate section (Generaldata, Englishprofile, Maoriprofile).

Add a input :


	<div class="form-group">
		    <label for="inputName" class="col-sm-2 control-label">LabelName</label>
		    <div class="col-sm-10">
		    <input type="number/text/button/checkbox/date/image/... = What do you except in the input" class="form-control update" id="inputId" name="inputName" value="<?php p($_['Variable']); ?>" placeholder="default text on input"/>
		    <label id="inputname-status"></label>
		    </div>
 	</div>


Add a selection :

  	<div class="form-group">
		    <label for="selectame" class="col-sm-2 control-label">LabelName</label>
		    <div class="col-sm-10">
		    <select class="form-control" id="selectId" name="selectName">
		      <option value="option1" <?php if (($_['Variable']) == 'option1') echo ' selected="selected"'; ?>>option1</option>
		      <option value="option2" <?php if (($_['Variable']) == 'option2') echo ' selected="selected"'; ?>>option2</option>
		      <option value="option3" <?php if (($_['Variable']) == 'option3') echo ' selected="selected"'; ?>>option3</option>
		    </select>
		    <label id="selectname-status"></label>
		    </div>
	</div>


Add a textarea :

    	<div class="form-group">
		    <label for="textareaName" class="col-sm-2 control-label">LabelName</label>
		    <div class="col-sm-10">
		    <textarea class="form-control update" id="textareaId" name="textareaName" placeholder="default text on textarea"><?php p($_['Variable']); ?></textarea>
		    <label id="textareaname-status"></label>
		    </div>
	</div>

 -->


