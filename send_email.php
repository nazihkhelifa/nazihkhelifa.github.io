<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $address = $_POST['address'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up the recipient email address
    $to = 'nazihkhelifa@gmail.com'; // Replace this with your email address

    // Set up the email headers
    $headers = "From: $name <$address>";
    $headers .= "Reply-To: $address";
    $headers .= "MIME-Version: 1.0";
    $headers .= "Content-type: text/html; charset=utf-8";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Address: $address\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Your message has been sent successfully!';
    } else {
        echo 'Oops! Something went wrong and we couldn\'t send your message.';
    }
}
?>
