<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "panaliyamohit1@gmail.com"; // Replace with your email

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subjectInput = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $subject = "New message from contact form: $subjectInput";
    $body = "Name: $name\nEmail: $email\nSubject: $subjectInput\nMessage:\n$message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email failed to send.";
    }
} else {
    echo "Invalid request.";
}
?>
