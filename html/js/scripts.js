$(document).ready(function(){
	$('.mobile-icon').click(function() {
		$('.mobile-navBox').slideToggle();
		
	});
})

$(document).ready(function(){
	$(".watchvideo").click(function(){
		$(".videopopup").show();
	});
	
	$(".close").click(function(){
		$(".videopopup").hide();
	})
});
