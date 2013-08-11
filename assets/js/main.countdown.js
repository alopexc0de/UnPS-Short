$(function(){
	var note = $('#note'),
		ts = new Date(2013, 7, 20, 12, 30);
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			var message = "";
			message += days + " day" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
			message += "Until the relaunch of <a href=\"http://unps.us\">UnPS.US</a>";
			
			note.html(message);
		}
	});
	
});
