$(document).ready(function(){
	// Check admin password is correct or not
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		$.ajax({
			type: 'post',
			url: "/admin/check-current-password",
			data: {current_pwd:current_pwd},
			success: function(resp){
				if (resp == 'false') {
					$("#checkPwdMsg").html('<font color="red">Please enter correct current password!</font>');
					$("#current_pwd_fg").removeClass('has-success').addClass('has-error');
				} else if (resp == 'true') {
					$("#checkPwdMsg").html('<font color="green">Current password is correct!</font>');
					$("#current_pwd_fg").removeClass('has-error').addClass('has-success');
				}
				
			}, error: function(resp){
				$("#current_pwd").removeClass('has-success').addClass('has-error');
				$("#checkPwdMsg").html('<font color="red">Opps, There is some issue!</font>');
			}
		});
	});
	// |/==/ End of Check admin password is correct or not
});
