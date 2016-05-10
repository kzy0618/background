/**
 * ownCloud - background
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Shawn <syu702@aucklanduni.ac.nz>
 * @copyright Shawn 2016
 */

(function ($, OC) {
	$(document).ready(function () {
		function saveSettings() {
			//OC.msg.startSaving('#activity_notifications_msg');
			var post = $('#background').serialize();
			var result = '#' + $(this).attr('name') + '-status';

			$.post(OC.generateUrl('/apps/background/settings'), post)
			  .done(function() {
				  //alert( "second success" );
				  $(result).text("Saved!");
			  })
			  .fail(function(xhr, textStatus, errorThrown) {
				$(result).text("Error!");
			        //alert(xhr.responseText + "\n" + errorThrown);
			  })
			  .always(function() {
				  //alert( "finished" );
			  });
		}

		var $activityNotifications = $('#background');
		$activityNotifications.find('input').change(saveSettings);
		$activityNotifications.find('select').change(saveSettings);
		
//		$( "#name" ).change(function saveSettings() {	
//			alert( "Data Saved: " + $(this).attr('name') + $(this).val());
//			var jason = $.ajax({
//				cache: false,
//				async: true,
//				dataType : 'json',
//				type: "POST",
//				url: OC.generateUrl('/apps/background/settings'),
//				data: "key=" + $(this).attr('name')
//	               + "&value=" + $(this).val(),
//	            success: function(msg){
//	               alert( "Data Saved: " + msg  + $(this).attr('name') + $(this).val());
//	            },
//	            error: function(jqXHR, textStatus, errorThrown){
//	               console.log(errorThrown);
//	               console.log(jqXHR);
//	            }
//			});
//			
//			alert( "Data: " + jason);
//			
////			var post = {key: $(this).attr('name'), value: $(this).val()};
////
////			$.post(OC.generateUrl('/apps/background/settings'), post)
////			  .done(function() {
////				  alert( "second success" );
////			  })
////			  .fail(function(xhr, textStatus, errorThrown) {
////			        alert(xhr.responseText + "\n" + errorThrown);
////			  })
////			  .always(function() {
////				  alert( "finished" );
////			  });
//		});
	});
})(jQuery, OC);
