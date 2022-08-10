var $ = jQuery;



$('.js-gotop').click(function () {
	$('body, html').animate({
		scrollTop: 0
	}, 700);

	return false;
});


