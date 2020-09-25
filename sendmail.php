<?php

	$email_to = "federicoschiocchet@gmail.com"; 		
	$email_subject = "Feedback from website"; 	
	$name = "Fede";
	$email_from = "fee@pixor.it"; 
	$message = "ciao";
	$headers  = "From: " . $email_from . "\r\n";
	$headers .= "Reply-To: " . $email_from . "\r\n";	
	$message = "Name: ". $name  . "\r\nMessage: " . $message;
	ini_set("sendmail_from", $email_from);
	$sent = mail($email_to, $email_subject, $message, $headers, "-f" . $email_from);
	
	if($sent) {
		echo "Success, message sent";
	} else {
		echo "There has been an error sending your message. Please try later.";
	}
		
?>
