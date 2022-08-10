


var $ = jQuery;



$(window).bind('load', function() {
	$('.js-home-slider').find('.owl-carousel').owlCarousel({
		autoplay:           true,
		autoplaySpeed:      1000,
		autoplayTimeout:    5000,
		dots:               true,
		items:              1,
		loop:               true,
		margin:             0
	});
});


