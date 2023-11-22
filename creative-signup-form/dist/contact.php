<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['phone number'];
$to = 'jibanxc@gmail.com';
$subject = 'Contact Form Submission';

$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $body, $headers)) {
    echo 'Your message has been sent successfully.';
} else {
    echo 'Failed to send the message. Please try again.';
}
?>