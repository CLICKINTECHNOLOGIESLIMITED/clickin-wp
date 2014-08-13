$(document).ready(function(){
	$(".submit").click(function () {
		var email = $(this).closest("form").find("input[name='email']");
		if(email.val() == ''){
			alert("Please Enter Email.");
			email.focus();
			return false;
		}

		if(email.val() != ""){
			var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+([.-]?[a-zA-Z0-9]+)?([\.]{1}[a-zA-Z]{2,4}){1,4}$/;  
			if(!emailPattern.test(email.val())){
				alert("Please Enter Valid Email. ");
				email.focus();
				return false;
			}
		}
	});
});
