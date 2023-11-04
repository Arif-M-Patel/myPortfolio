<?php

// Get the form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send the email
mail('arifpatel2828@gmail.com', 'Contact Form Submission', "$fullname sent you a message:\n\n$message");

// Redirect the user to a thank you page
header('Location: thank-you.html');

?>
