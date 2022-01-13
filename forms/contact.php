<?php

		$name = $_POST['name'];
		$email = $_POST['email'];
		$code = $_POST['phone_code'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$email_from = '$email';
		$email_body = "Name: $name.\n".
					  "email: $email.\n".
					  "Country-code: $code.\n".
					  "Contact: $phone.\n".
					  "User Message: $message.\n";	
	
		$to_email = "contact@imfrin.com";					  
		$headers =  "From: $email_from \r\n";
		$headers .=  "Reply-To: $email \r\n";
		

		$secretKey = "6Lew3egUAAAAADZCCUIn5bl_bGHn9ZifBqtF_Q3H";
		$responseKey = $_POST['g-recaptcha-response'];
		$UserIP = $_SERVER['REMOTE_ADDR'];
		$url =  "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

		$response = file_get_contents($url);
		$response = json_decode($response);

		if ($response->success) {
			mail($to_email,$subject,$email_body,$headers);
			echo "Message sent successfully !";
		}

?>