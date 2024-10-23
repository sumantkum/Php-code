<?php
// Email parameters
$to = "sumantpandit993127@gmail.com";
$subject = "Greetings from PHP!";

$message = "
    Hello Sumant,

    This is a test email sent from a PHP script.
    We are testing the mail functionality on your server to ensure everything is working correctly.

    Below are the details of this test email:
    - Sent via PHP mail() function.
    - Message content is customizable.
    
    If you received this message, it means that the mail system is functioning properly.

    Best regards,
    PHP Mail Test Script

    P.S. Let us know if you need any further assistance.
";
$headers = "From: sumantpandi799@gmail.com";

// Send the email
$check = mail($to, $subject, $message, $headers);

if ($check) {
    echo "Email sent successfully!";
} else {
    echo "Email not sent.";
}
?>
