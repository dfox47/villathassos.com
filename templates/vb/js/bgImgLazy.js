


var $ = jQuery.noConflict();



$(window).on('load', function () {
	$('.js-bg-img-lazy').each(function () {
		var _this = $(this);

		_this.css('background-image', 'url(' + _this.attr('data-img-src') + ')' );
	});
});


