(function($){
	var body    = $('body'),
	    _window = $(window);
	

	/***************** Blog Masonry Timeline Setup *******************/
	

	
	
	
	/************************************** Home post Load **************************************/
	$(function(){

		if($('body').find('.blog-articles').length > 0) {
				// masonry Init
				$container = $('.blog-articles');
				$container.imagesLoaded(function(){ 
						$container.masonry({
							 itemSelector: '.home-list'
						}); 
				});
	
				//Ajax call setup
				var page = 1;
				var loading = true;
				var $content = $(".blog-articles");
				var load_posts = function(){
								$.ajax({
										type       : "GET",
										data       : {numPosts : numOfPosts, pageNumber: page},
										dataType   : "html",
										url        : templateDir + "/loop-handler.php",
										success    : function(data){
												masonryPrependAppend(data);
										}
						});
				}
				
				//Load more at windows scroll
				$(window).scroll(function() {
					 if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
							if(!loading) {
									loading = true;
									page++;
									load_posts();
							}
					 }
				});
				
				// Load initial posts
				load_posts();
				
				// Masonry Prepend/Append
				function masonryPrependAppend(data){
					$data = $(data);
					if($data.length){													
						var $data = $(data).filter(".home-list");													
						$data.hide();
						if(page == 1) {
							$container.prepend($data).imagesLoaded(function(){
									$container.masonry( 'prepended', $data, true );
									setTimelineArrows();
							});
						} else {
							$container.append($data).imagesLoaded(function(){
										$container.masonry( 'appended', $data, true );
										setTimelineArrows();
							});
						}
						
						$data.fadeIn(500, function(){						
							loading = false;
						});												
							
					}
				} 
				
				//Set timeline arrows left or right based on the post position
				function setTimelineArrows() {
						var s = $('.blog-articles').find('.home-list');
						$.each(s, function (i, obj) {
								var posLeft = $(obj).css("left");
								if (posLeft == "0px") {
										$(obj).addClass('arrow-right');
								}
						});
				}
				
		}
	});




})(jQuery);


function popitup(url) {
	newwindow=window.open(url,'name','height=500,width=500');
	if (window.focus) {newwindow.focus()}
	return false;
}
//Social feeds See more End
