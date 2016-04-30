$(document).ready(function() {
	function saveSettings(key, value) {		
	    $.ajax({
	    	 cache: false,
	    	 async: true,
	         type: "POST",
	         url: OC.generateUrl('/apps/background/settings'),
	         data: "userId=" + $('#name').attr('value') 
	               + "&key=" + key 
	               + "&value=" + value,
	         success: function(msg){
	                     alert( "Data Saved: " + msg );
	                  },
	         error: function(jqXHR, textStatus, errorThrown){
	                      console.log(errorThrown);
	                      console.log(jqXHR);
	                  }
	    });
	}

	$('#name').blur(saveSettings($('#name').attr('id'), $('#name').val()));
	$('#age').blur(saveSettings($('#age').attr('id'), $('#age').val()));
	$('#background').keypress(function(event) {
		if (event.keyCode === 13) {
			event.preventDefault();
		}
	});
});
