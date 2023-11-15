<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields.";
        exit;
    }

    // Email address where the form data will be sent
    $to = "khunderan@email.com";

    // Subject of the email
    $subject = "New Form Submission";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for your message! We'll get back to you soon.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    // If the form is not submitted via POST, return an error message
    echo "Error: Invalid form submission.";
}

?>
