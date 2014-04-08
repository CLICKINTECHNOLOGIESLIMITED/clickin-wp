(function($){
	var body    = $('body'),
	    _window = $(window);
	

	/***************** Blog Timeline Setup *******************/
	
	$(function(){
		
		// variabel initializing
		var blogList;
		if (!blogList) {
				blogList = {
						blogs: {}
				};
		} else if (!blogList.blogs) {
				blogList.blogs = {}
		}
		
		blogList.blogs.lookup = {
				masonryOptions: {
					itemSelector: '.home-list'
				},
				init: function () {
					$(function () {
							blogList.blogs.lookup.masonry = $(".blog-articles").masonry(blogList.blogs.lookup.masonryOptions);
							blogList.blogs.lookup.arrow_Points();
					});
				},
				arrow_Points: function () {
						var s = $('.blog-articles').find('.home-list');
						$.each(s, function (i, obj) {
								var posLeft = $(obj).css("left");
								if (posLeft == "0px") {
										$(obj).addClass('arrow-right');
								}
						});
				}
		};
		
		blogList.blogs.lookup.init();
		
	});
	

})(jQuery);