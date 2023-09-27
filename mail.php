<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can customize these email parameters
    // $to = "babu.cse46@gmail.com";
    $to = "saiful.onest@gmail.com";
    $subject = "New Message from $fullname";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message_body = "<html><body>";
    $message_body .= "<p><b>Full Name:</b> $fullname</p>";
    $message_body .= "<p><b>Email:</b> $email</p>";
    $message_body .= "<p><b>Message:</b> $message</p>";
    $message_body .= "</body></html>";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Please try again later.";
    }
} else {
    echo "Invalid request method. Please submit the form.";
}
?>
