<?php

	$emailError = "";
	$bodyError = "";
	$sendError ="";
	$successMessage = "";
	$mailSent = "";

	// Check for post request
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		// Grab essential details from form
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$body = $_POST['emailBody'];

		// Check if either required field has errors
		$emailError = checkForEmailError($email);
		$bodyError = checkForBodyError($body);

		// If no errors, continue
		if (empty($emailError) && empty($bodyError)) {
			
			$myEmail = "mattcatha@gmail.com";
			$headers = "From: " . $email;

			// Wordwrap any super long words (per php.net)
			$body = wordwrap($body, 70, "\r\n");
			
			// If successful, display success message
			if(mail($myEmail, $subject, $body, $headers)) {
				$successMessage = mailMessageConstructor(true);
				$mailSent = true;

			// Else, display error
			} else {
				$sendError = mailMessageConstructor(false);
			}

		}

	}

	// Checking for empty email address
	function checkForEmailError($emailAddress) {

		$message = "";
		$error = "";

		if (empty($emailAddress)) {
			$message .= "Please enter an email address!";
			$error = errorConstructor($message);
			return $error;
		}

		return $error;
	}

	// Checking for empty body or body that's too long
	function checkForBodyError($body) {

		$message = "";
		$error = "";

		if (empty($body)) {
			$message .= "Email must have a body!";
			$error = errorConstructor($message);
			return $error;
		} else if (strlen($body) > 500) {
			$message .= "Email must be less than 500 characters!";
			$error = errorConstructor($message);
			return $error;
		}

		return $error;
	}

	// Constructing error flag (using semantic ui syntax)
	function errorConstructor($errorMessage) {

		return "<div class='ui basic red pointing prompt label transition visible'>" . $errorMessage . "</div>";
	}

	// Constructing send mail response (using semantic ui syntax)
	function mailMessageConstructor($isSuccessful) {

		$totalMessage = "";

		if ($isSuccessful) {
			$totalMessage .= 
			"<div class='ui icon positive message'>
  				<i class='thumbs outline up icon'></i>
  				<div class='content'>
   			 		<div class='header'>
      					Message sent successfully!
    				</div>
    			<p>Thanks! I will reply back ASAP.</p>
  				</div>
			</div>";
		} else {
			$totalMessage .= 
			"<div class='ui icon negative message'>
  				<i class='bomb icon'></i>
  				<div class='content'>
   			 		<div class='header'>
      					Message could not be sent!
    				</div>
    			<p>Sorry! Please try again later.</p>
  				</div>
			</div>";
		}

		return $totalMessage;
	}

?>