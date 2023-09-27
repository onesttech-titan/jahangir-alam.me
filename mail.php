<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create an array to store the response data
    $response = array();

    // Configure your email server settings
    // $mail = new PHPMailer(true);
    try {
        //Server settings

        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '41fcc99c7d20af';
        $phpmailer->Password = '061abd42a60e07';
        $phpmailer->SMTPSecure = false; 


        //Recipients
        $phpmailer->setFrom('test@example.com', 'test');  // Replace with your email and name
        $phpmailer->addAddress('test@example.com', 'test get');  // Replace with recipient's email and name

        // Content
        $phpmailer->isHTML(true);
        $phpmailer->Subject = 'New Message from ';
        $phpmailer->Body    = "lol";
        // die(json_encode($mail));
        try {
            //code...
            $phpmailer->send();
        } catch (\Throwable $th) {
            die($th);
        }

        // Email sent successfully
        $response['success'] = true;
        $response['message'] = "Message sent successfully!";
    } catch (Exception $e) {
        // Email sending failed
        $response['success'] = false;
        $response['message'] = "Message could not be sent. Error: {$mail->ErrorInfo}";
    }

    // Return the JSON response
    header('Content-type: application/json');
    echo json_encode($response);
} else {
    echo "Invalid request method. Please submit the form.";
}
?>
