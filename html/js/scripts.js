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




// Author - kakkar

(function($){
	var body    = $('body'),
	    _window = $(window);
	
	$(function(){
		 function positionElements() {
			 if(_window.width() > 768) {
					windowHeight = _window.height()-142;
					$('.fixedMobile, .contentCntr').css('height',windowHeight);
					if($('.mobileBox').height() > 649) {
						$('.mobileBox').css({'top':'50%','margin-top':-350});
					} else {
						$('.mobileBox').css({'top':'5%','margin-top':0});
					}
			 } else {
					$('.fixedMobile, .contentCntr').css('height','auto');
			 }
		 }

		positionElements();
		_window.on('resize',function(){
				positionElements();
		});
		
	});
})(jQuery);		