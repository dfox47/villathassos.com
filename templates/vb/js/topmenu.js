


var $ = jQuery;

$(window).bind("load", function() {
	$('.js-mobile-menu-toggle').click(function() {
		$('html').toggleClass('mobile_menu_active');
	});

	$('.js-mobile-menu-close').click(function() {
		$('html').removeClass('mobile_menu_active');
	});
});


