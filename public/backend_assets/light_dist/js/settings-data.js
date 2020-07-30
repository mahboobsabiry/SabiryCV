// Settings page all javascript code will be here...

// Update admin current password
$("#updatePasswordForm").submit(function(e){
	e.preventDefault();

	var current_pwd = $("#current_pwd").val();
	var new_pwd = $("#new_pwd").val();
	var confirm_pwd = $("#confirm_pwd").val();
	$.ajax({
		type: 'post',
		url: "/admin/update-current-password",
		data: {
			current_pwd:$("#current_pwd").val(),
			new_pwd:$("#new_pwd").val(),
			confirm_pwd:$("#confirm_pwd").val()
		},
		success:function(resp){
			$("#current_pwd_fg").removeClass('has-error');
			$("#current_pwd_fg").removeClass('has-success');
			$("#checkPwdMsg").text("");
			$("#current_pwd").val("");
			$("#new_pwd").val("");
			$("#confirm_pwd").val("");
			if (resp['message']) {
				$.toast({
					heading: 'Success Message!',
					text: resp['message'],
					position: 'top-right',
					loaderBg:'#2ecd99',
					icon: 'success',
					hideAfter: 3500, 
					stack: 6
				});
			} else if(resp['error']){
				$.toast({
					heading: 'Error Message!',
					text: resp['error'],
					position: 'top-right',
					loaderBg:'#2ecd99',
					icon: 'error',
					hideAfter: 3500, 
					stack: 6
				});
			} else {
				$.toast({
					heading: 'Error Message!',
					text: resp['incorrect'],
					position: 'top-right',
					loaderBg:'#2ecd99',
					icon: 'error',
					hideAfter: 3500, 
					stack: 6
				});
			}
			
		}, error:function(){
			$("#current_pwd_fg").removeClass('has-error');
			$("#current_pwd_fg").removeClass('has-success');
			$("#checkPwdMsg").text("");
			$.toast({
				heading: 'Error',
				text: 'Opps, some error has been occurred!',
				position: 'top-right',
				loaderBg:'#f0c541',
				icon: 'error',
				hideAfter: 3500, 
				stack: 6
			});
		}
	});
});
