<?php

// Email of sender
$mail_from="$customer_email"; 

// Message
$message="$message";

// From 
$header="from: $customer_email <$mail_from>";

// Enter your email address
$to ='jesus@jesusamaro.com';
$send_contact=mail($to,$customer_email,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "Thanks I got it!";
}
else {
echo "Try again, it failed!";
}
?>