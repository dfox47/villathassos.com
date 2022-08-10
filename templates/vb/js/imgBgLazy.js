var $ = jQuery.noConflict();



$(window).on('load', function () {
	$('.js-img-bg').each(function () {
		var _this = $(this);

		var imgSrc = _this.attr('data-img-src');

		_this.removeClass('js-img-bg').css({
			'background-image': 'url(' + imgSrc + ')'
		});
	});
});


