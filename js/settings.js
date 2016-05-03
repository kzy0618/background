$(document).ready(function() {
	function saveSettings() {
		//OC.msg.startSaving('#activity_notifications_msg');
		var post = $('#background').serialize();

		$.post(OC.generateUrl('/apps/background/settings'), post, function(response) {
			//OC.msg.finishedSuccess('#activity_notifications_msg', response.data.message);
		});
	}

	var $activityNotifications = $('#background');
	$activityNotifications.find('input[type=text]').change(saveSettings);

	//$activityNotifications.find('select').change(saveSettings);
});
