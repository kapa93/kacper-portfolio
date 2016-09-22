<?php
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'kacpermyslinski@gmail.com'; 
$email_subject = "Website Contact Form:  Portfolio";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@kacpermyslinski@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>