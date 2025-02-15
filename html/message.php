<?php
// Lets get all form values

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if(!empty($email) && !empty($message)) {
    //if email and message field is not empty

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //if user entered email is valid

        $receiver = "receiveremail@email.com"; //email receiver email address
        $subject = "From: $name <$email>"; //subject of the email. Subject looks like from: CodingNepal <abc@gmail.com>

        //merging contact all user values inside body variable
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards, \n$name";

        $sender = "From: $email"; //sender email

        if(mail($receiver, $subject, $body, $sender)) {
            //mail() is a inbuilt php function to send mail
            echo "Your message has been sent successfully."
        } else {
            echo "Sorry! Failed to send the message."
        }

    } else {
        echo "Enter a valid email address!";
    }

}else {
    echo "Email and Password field is required!"
}


?>