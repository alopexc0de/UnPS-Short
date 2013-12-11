vex.defaultOptions.className = 'vex-theme-os';

// Login button from navbar
$('.login').click(function(){
	vex.dialog.open({
		showCloseButton: true,
		message: 'Enter your username and password:',
		input: '' +
			'<input name="username" type="text" placeholder="Username" required />' +
			'<input name="password" type="password" placeholder="Password" required />' +
			'<input name="register" type="submit" class="btn loginbtn" value="Register" onclick="userReg()" />' +
		'',
		buttons: [
			$.extend({}, vex.dialog.buttons.YES, { text: 'Login' }),
			$.extend({}, vex.dialog.buttons.NO, { text: 'Cancel' })
		],
		callback: function (data) {
			if (data.username == undefined){
			}else if (data.password == undefined){
			}else if (data.register == true){
				// ?
			}else{
			    // AJAX request to log in
        		$.post("../../login.php", data, function(datam){
          			$("#message").hide().html(datam).fadeIn("fast");
          			if($('#error').length){
            			$('#short-button').removeClass('btn-primary');
            			$('#short-button').removeClass('btn-success');
            			$('#short-button').addClass('btn-danger');
          			}else if($('#success').length){
            			$('#short-button').removeClass('btn-primary');
            			$('#short-button').removeClass('btn-danger');
            			$('#short-button').addClass('btn-success');
          			}
        		});
			}
		}
	});
});