u<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace 'your-email@example.com' with your actual email address
    $to = "aishwaryabelekar7@gmail.com";
    $subject = "New Message from $name";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain;charset=utf-8\r\n";

    // Compose and send the email
    $mailSuccess = mail($to, $subject, $message, $headers);

    // Handle success or failure
    if ($mailSuccess) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message. Please try again later.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit();
}
?>
