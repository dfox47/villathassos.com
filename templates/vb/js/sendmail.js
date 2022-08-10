var $ = jQuery;

$(window).bind('load', function() {
	sendmail();



	// AJAX contact form
	function sendmail() {
		var messageDelay = 2000;

		$('.js-feedback-form').submit(submitForm);

		function submitForm() {
			var $contactForm    = $(this);
			var name            = $contactForm.find('.js-feedback-name');
			var email           = $contactForm.find('.js-feedback-email');
			var message         = $contactForm.find('.js-feedback-message');

			if (!name.val() || !email.val() || !message.val()) {
				$contactForm.find('.js-feedback-incomplete').addClass('active').delay(messageDelay).queue(function() {
					$(this).removeClass('active').dequeue();
				});
			}
			else {
				$contactForm.find('.js-feedback-sending').addClass('active');

				$.ajax({
					url:        $contactForm.attr('action') + '?ajax=true',
					type:       $contactForm.attr('method'),
					data:       $contactForm.serialize(),
					success:    submitFinished
				});
			}

			return false;
		}

		function submitFinished(response) {
			response = $.trim(response);
			$('.js-feedback-sending').removeClass('active');

			if (response === 'success') {
				$('.js-feedback-success').addClass('active').delay(messageDelay).queue(function() {
					$(this).removeClass('active').dequeue();
				});
			}
			else {
				$('.js-feedback-fail').addClass('active').delay(messageDelay).queue(function() {
					$(this).removeClass('active').dequeue();
				});
			}
		}
	}
});


