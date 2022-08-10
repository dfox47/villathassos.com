var $ = jQuery;

$(window).bind('load', function() {
	placeholderHide();

	function placeholderHide() {
		$('.feedback_field input, .feedback_field textarea').focus(function() {
			$(this).data('placeholder',$(this).attr('placeholder'))
				.attr('placeholder','');
		}).blur(function() {
			$(this).attr('placeholder',$(this).data('placeholder'));
		});
	}
});


