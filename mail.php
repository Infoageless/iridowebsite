<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contactNumber =htmlspecialchars($_POST['contactNumber']);
    $message = htmlspecialchars($_POST ['message']);
    $to = "agelessdesigns1@gmail.com"; 
    $subject = "New message from" . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {

    Header ("Location: index.html");
    exit();
}
?>
