<?php

// Collecting the fields entered in the form.
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Mail Header
$mailheader = "From:" .$name."<".$email.">\r\n;

$recipient = "sofiullahc@gmail.com"

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo "Message Send";

>