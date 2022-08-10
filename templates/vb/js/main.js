


var $ = jQuery;



$(window).bind('load', function() {
	$('html').removeClass('preload no-js');

	windowResize();

	$(window).resize(windowResize);

	$(window).scroll(function() {});



	// https://fancyapps.com/fancybox/3/docs/#usage
	$('.js-photo-slider-link').fancybox({
		// Options will go here
	});



	$(document).on('click', '.popup_open', function() {
		var ajax_link       = $(this).attr("data-ajax");
		var ajax_window     = $(this).attr("data-ajax-window");
		var current_lang    = $("html").attr("lang");

		$('.' + ajax_window).addClass("active").find(".popup_content_ajax").load("/" + current_lang + "/" + ajax_link + " .item_body", function() {
			// some stuff here
		});

		$("body, html").addClass("overflow_hidden");
	});

	$(document).on('click', '.popup_bg', function() {
		$(this).parent().removeClass("active");

		$("body, html").removeClass("overflow_hidden");
	});

	$(document).on('click', '.popup_close', function() {
		$(this).parent().parent().removeClass("active");

		$("body, html").removeClass("overflow_hidden");
	});



	$('.js-video source').each(function() {
		var sourceFile  = $(this).attr('data-src');
		var video       = this.parentElement;

		$(this).attr('src', sourceFile);

		video.load();
		video.play();
	});

	// when window resizing
	function windowResize() {}
});


