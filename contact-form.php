<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "silvan.albin@hotmail.com"; // Replace this with your email address
    $subject = "New message from your website";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    $email_body = "First Name: $firstname\nLast Name: $lastname\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $email_body, $headers)) {
        header("Location: thankyou.html"); // Redirect to a thank you page
        exit();
    } else {
        echo "An error occurred while sending the email.";
    }
}
?>
