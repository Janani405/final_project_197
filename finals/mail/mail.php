<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if (isset($_POST["send"])) {
    $mail = new PHPMailer(true); // Create PHPMailer instance

    try {
        // Set up mailer configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'jananiliyanage405@gmail.com'; // Your Gmail address
        $mail->Password = 'agfk azjw qcbj sxku'; // App password (not regular Gmail password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // For STARTTLS encryption
        $mail->Port = 587; // Port for STARTTLS
        // Use port 587 for TLS, 465 for SSL

        // Set the sender's email
        $mail->setFrom('your_email@gmail.com', 'Your Name'); // Sender's email and name
        // Add the recipient email
        $mail->addAddress($_POST["email"], 'Recipient Name'); // Recipient's email from the form

        // Set email format to HTML
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"]; // Subject from the form
        $mail->Body = $_POST["message"]; // Message body from the form

        // Send email
        if ($mail->send()) {
            echo "<script>
                    alert('Email sent successfully!');
                    document.location.href = 'send.php'; // Redirect after sending
                  </script>";
        } else {
            echo "<script>
                    alert('Failed to send email. Please try again.');
                    document.location.href = 'send.php';
                  </script>";
        }

    } catch (Exception $e) {
        // Display error if mail sending fails
        echo "<script>
                alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
                document.location.href = 'send.php';
              </script>";
    }
}
?>

<!-- HTML Form for user input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
    <form action="mail.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea name="message" rows="5" required></textarea><br><br>

        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>
