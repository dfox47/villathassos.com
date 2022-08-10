var $ = jQuery.noConflict();



$(window).on('load', function () {
	$('.js-scroll-to').click(function () {
		var scrollTo        = $(this).attr('href');
		var scrollToShort   = scrollTo.replace('#', '');

		if ( $('#' + scrollToShort).length !== 0 ) {
			$('body, html').animate({
				scrollTop: $(scrollTo).offset().top
			}, 700);
		}
		else {
			console.log('block does NOT exist: ' + scrollTo);
		}
	});
});


