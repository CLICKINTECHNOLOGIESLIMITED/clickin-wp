$(document).ready(function(){
	$(".signupContainer,.signupContainer1").html('<span class="thankyou">Thank you for signing up!</span>');
	$(".yourScoreContainer").html('<p class="thankyou">Thank you for signing up! We will keep you updated. </p>');
	$("#originalImage").hide();
	$("#revertImage").show();
	$(".submit").attr('disable','true');
});
