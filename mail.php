<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "trentixplay@gmail.com";

    // Set email subject
    $email_subject = "$subject";

    // Set email message
    $email_body = "You have received a new message from the $name.\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Message:\n$message\n";

    // Set email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Attempt to send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Sorry, there was an error sending your message. Please try again later.</div>';
    }
}


