$(document).ready(function(){
	$(window).resize(function(){
		if($(window).width() > 640){
		$('.mobile-navBox').css('left','-300');
		}
	});
	$('.mobile-icon').click(function() {
		var $lefty = $(".mobile-navBox");
		$lefty.animate({
		left: parseInt($lefty.css('left'),10) == 0 ?
		-$lefty.outerWidth() + 40 :
		0
		});
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
