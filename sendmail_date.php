<?php // Define constants
define( "RECIPIENT_NAME",		"villabansko.com" );
define( "RECIPIENT_EMAIL",		"info@villabansko.com" ); // where to send email
define( "EMAIL_SUBJECT",		"[villabansko.com] Book request" );

// Read the form values
$success = false;

$feedback_input_name		= isset( $_POST['feedback_input_name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['feedback_input_name'] ) : "";
$feedback_input_email		= isset( $_POST['feedback_input_email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['feedback_input_email'] ) : "";
$feedback_select_apts		= $_POST['feedback_select_apts'];
$feedback_field_date_in		= $_POST['feedback_field_date_in'];
$feedback_field_date_out	= $_POST['feedback_field_date_out'];
$feedback_message			= $_POST['feedback_message'];

$message = "
	<html>
		<body>
			Имя: <strong>$feedback_input_name</strong> ($feedback_input_email)<br />
			Апартаменты: <strong>$feedback_select_apts</strong><br />
			Дата заезда: <strong>$feedback_field_date_in</strong><br />
			Дата выезда: <strong>$feedback_field_date_out</strong><br />
			<span style=\"font-size:20px\">$feedback_message</span>
		</body>
	</html>
";

// If all values exist, send the email
if ($feedback_input_name && $feedback_input_email && $feedback_field_date_in && $feedback_field_date_out) {
	$recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
	$headers = "Content-type: text/html; charset = utf-8 \r\n";
	$headers .= "From: " . $feedback_input_name . " <" . $feedback_input_email . ">";
	$success = mail($recipient, EMAIL_SUBJECT, $message, $headers);
}

// Return an appropriate response to the browser
if (isset($_GET["ajax"])) {
	echo $success ? "success" : "error";
}
else { ?>
	<html>
		<head>
			<title>Thank you!</title>
		</head>

		<body>
			<?php if ($success) {
				echo "<p>Thank you for your message!</p>";
			}
			else {
				echo "<p>Error while sendind, try again please</p>";
			} ?>

			<a href="/">To home page</a>
		</body>
	</html>
<?php } ?>


