	function saveSettings(input) {		
	    $.ajax({
	    	 cache: false,
	    	 async: true,
	         type: "POST",
	         url: OC.generateUrl('/apps/background/settings'),
	         data: "userId=" + $('#name').attr('value') 
	               + "&key=" + input.id 
	               + "&value=" + input.value,
	         success: function(msg){
	                     alert( "Data Saved: " + msg );
	                  },
	         error: function(jqXHR, textStatus, errorThrown){
	                      console.log(errorThrown);
	                      console.log(jqXHR);
	                  }
	    });
