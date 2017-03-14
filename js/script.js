/**
 * ownCloud - background
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Shawn <syu702@aucklanduni.ac.nz>, A.Daugieras <adau828@aucklanduni.ac.nz>
 * @copyright Shawn,Daugieras 2017
 */

(function ($, OC) {
	$(document).ready(function () {

		//allows to go on a other page (show one page and hide the two others)
		$("#next").click(function(e){
			e.preventDefault();
	 		$('#Generaldata').addClass('hidden');
			$('#Maoriprofil').addClass('hidden');
			$('#Englishprofil').removeClass('hidden');
	    	});

		$("#previous2").click(function(e){
			e.preventDefault();
			$('#Generaldata').removeClass('hidden');
			$('#Maoriprofil').addClass('hidden');
			$('#Englishprofil').addClass('hidden');
	    	});

		$("#next2").click(function(e){
			e.preventDefault();
	 		$('#Generaldata').addClass('hidden');
			$('#Maoriprofil').removeClass('hidden');
			$('#Englishprofil').addClass('hidden');
	    	});

		$("#previous3").click(function(e){
			e.preventDefault();
			$('#Generaldata').addClass('hidden');
			$('#Maoriprofil').addClass('hidden');
			$('#Englishprofil').removeClass('hidden');
	    	});

		function saveSettings() {
			var post = $('#background').serialize();
			var result = '#' + $(this).attr('name') + '-status';

			$.post(OC.generateUrl('/apps/background/settings'), post)
			  .done(function() {;
				  $(result).text("Saved!");
			  })
			  .fail(function() {
				$(result).text("Error!");
			  })
			  .always(function() {
			  });
		}

		var $activityNotifications = $('#background');
		//savesetting when users add informations from input, select or textarea
		$activityNotifications.find('input').change(saveSettings);
		$activityNotifications.find('select').change(saveSettings);
		$activityNotifications.find('#addr').change(saveSettings);
		$activityNotifications.find('#edetail').change(saveSettings);
		$activityNotifications.find('#mdetail').change(saveSettings);	
	});

})(jQuery, OC);
