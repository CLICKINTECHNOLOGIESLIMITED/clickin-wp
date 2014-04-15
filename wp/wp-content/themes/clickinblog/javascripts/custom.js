(function($){
	var body    = $('body'),
	    _window = $(window);
	

	/***************** Blog Masonry Timeline Setup *******************/
	
	var blogList;
	if (!blogList) {
			blogList = {
					blogs: {}
			};
	} else if (!blogList.blogs) {
			blogList.blogs = {}
	}

	blogList.blogs.lookup = {
			init: function () {
				$(function () {
							var container = document.querySelector('.blog-articles');
							var msnry = new Masonry( container, {
								itemSelector: '.home-list',
							});
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

		
	
	
	
	/************************************** Home post Load **************************************/
	$(function(){

		if($('body').find('.blog-articles').length > 0) {
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
												$data = $(data);
												if($data.length){
														$data.hide();
														$content.append($data);
														$data.fadeIn(500, function(){
																loading = false;
														});
														blogList.blogs.lookup.init();
														
												} else {
													clickHandler.html('<a href="#">No More Videos!</a>');
												}
										},
										error : function(jqXHR, textStatus, errorThrown) {
												clickHandler.html('Error!');
												//alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
										}
						});
				}
				$(window).scroll(function() {
					 if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
							if(!loading) {
											loading = true;
											page++;
											load_posts();
							}
					 }
				});
				load_posts();
		}
	});




})(jQuery);


function popitup(url) {
	newwindow=window.open(url,'name','height=500,width=500');
	if (window.focus) {newwindow.focus()}
	return false;
}
//Social feeds See more End
