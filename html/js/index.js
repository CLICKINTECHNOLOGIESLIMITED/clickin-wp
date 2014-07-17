$(document).ready(function () {

    preparePages();
		$(window).on('resize',function(){
			preparePages();
		});
    var scrolling = false;
    var previousTimestamp = 0
    var wheelDelta = 0;

    function wheelHandle(event) {
        event.preventDefault();
        if (scrolling || (event.timeStamp - previousTimestamp < 50)) {
            previousTimestamp = event.timeStamp;
            return false;
        }
        var point = getPointFromEvent(event);
        var x = point[0] - 10;
        var y = point[1] - 10;
        wheelDelta += getDeltaFromEvent(event);
        if (wheelDelta > 20) {
            scrolling = true;
            previousTimestamp = event.timeStamp;
            previousPage();
        } else if (wheelDelta < -20) {
            scrolling = true;
            previousTimestamp = event.timeStamp;
            nextPage();
        }
        if (scrolling) {
            event.stopPropagation();
            wheelDelta = 0;
            setTimeout(function () {
                scrolling = false;
            }, 500);
        }
    }
    var originalTouch;

    function touchStartHandle(event) {
        originalTouch = getPointFromEvent(event);
    }

    function touchMoveHandle(event) {
			event.preventDefault();
			if (scrolling || (event.timeStamp - previousTimestamp < 50)) {
					previousTimestamp = event.timeStamp;
					console.log("Scrolling. Ignore");
					return;
			}
			var point = getPointFromEvent(event);
			if (point[1] - originalTouch[1] < -20) {
					scrolling = true;
					previousTimestamp = event.timeStamp;
					nextPage();
			} else if (point[1] - originalTouch[1] > 20) {
					scrolling = true;
					previousTimestamp = event.timeStamp;
					previousPage();
			}
			console.log("Scrolling started.");
			setTimeout(function () {
					console.log("Scrolling ended.");
					scrolling = false;

			}, 500);
    }
    var currentPage = 1;
    var totalPages = 7;
    var didMovePage = false;
    var duration = 500;
		
    function preparePages() {
			if($(window).width() > 768) {
        $('.screenImage, .lastPage').css({opacity: 0});
        $('.screenImage, .lastPage').hide();

        $('.screenImage#screen1').css({opacity: 1});
        $('.screenImage#screen1').show();
			} else {
				$('.lastPage').css({opacity: 1});
				$('.lastPage').show();
			}

        $('body').bind('DOMMouseScroll mousewheel wheel', function (event) {
					if($(window).width() > 768) {
						wheelHandle(event);
					}
        });
        $('body').bind('touchstart', function (event) {
					if($(window).width() > 768) {
            touchStartHandle(event);
					}
        });
        $('body').bind('touchmove', function (event) {
					if($(window).width() > 768) {
            touchMoveHandle(event);
					}
        });
   }

    function goToPage(page) {
        if (currentPage == page) {
            return;
        }
        if (page == 7) {
            $('#overlay').animate({
                'opacity': 0
            }, 450, function () {
                $(this).hide();
            });
        } else {
            $('#overlay').show();
            $('#overlay').animate({
                'opacity': 1
            }, 450);
        }
        if (page == totalPages) {
            $("#bouncy").css({
                display: "none"
            });
        } else {
            $("#bouncy").css({
                display: "initial"
            });
        }
        didMovePage = true;
				
				if (page != 7) {
					$('#screen' + currentPage).animate({
							'opacity': 0,
							'margin-top': -8
					}, 450, function () {
							$(this).hide();
					});
				}
				
				
        setTimeout(function () {
            $('#screen' + page).show();
						
            $('#screen' + page).css({
                opacity: 0,
                'margin-top': 8
            });
            $('#screen' + page).animate({
                opacity: 1,
                'margin-top': 0
            }, 450);
        }, 450);
        currentPage = page;
    }

    function nextPage() {
        if (currentPage < totalPages) {
            goToPage(currentPage + 1);
        }
    }

    function previousPage() {
        if (currentPage > 1) {
            goToPage(currentPage - 1);
        }
    }

    function getDeltaFromEvent(event) {
        var originalEvent = event.originalEvent;
        var delta = 0;
        if (originalEvent) {
            delta = originalEvent.wheelDelta;
            if (!delta) {
                delta = (-1 * originalEvent.deltaY);
            }
        }
        return delta;
    }

    function getPointFromEvent(event) {
        var x = event.pageX;
        if (!x) {
            if (event.originalEvent) {
                var original = event.originalEvent;
                if (original.touches) {
                    var touch = original.touches[0];
                    if (touch) {
                        x = touch.pageX;
                    } else {
                        x = 0;
                    }
                } else {
                    if (original.pageX) {
                        x = original.pageX;
                    } else {
                        x = 0;
                    }
                }
            } else {
                x = 0;
            }
        }
        var y = event.pageY;
        if (!y) {
            if (event.originalEvent) {
                var original = event.originalEvent;
                if (original.touches) {
                    var touch = original.touches[0];
                    if (touch) {
                        y = touch.pageY;
                    } else {
                        y = 0;
                    }
                } else {
                    if (original.pageY) {
                        y = original.pageY;
                    } else {
                        y = 0;
                    }
                }
            } else {
                y = 0;
            }
        }
        return [x, y];
    }

});
