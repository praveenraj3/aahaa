<?php

$mode = $_POST['option'];
$to = "wow@aahaastores.com";
$body = "Name: " . $_POST['name']."\n";

if($mode == "phone") {
$body .= "Phone: " . $_POST['phone']."\n";  
}

else {
$body .= "Email: " . $_POST['email']."\n";  
}
  
$body .= "Message: " . $_POST['message']."\n";
$headers = 'From: Email Enquiry <info@aahaa.in>' . "\r\n";
$subject = "Email Enquiry from aahaa.in";

if(mail($to, $subject, $body, $headers)) {
    echo 'true';
  }
else {
    echo 'false';
}

?>