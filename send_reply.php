<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require 'vendor/autoload.php'; // Use this if installed via Composer
// OR include 'path/to/PHPMailer/PHPMailerAutoload.php'; if you manually downloaded

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['replyMessage'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                 // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                          // Enable SMTP authentication
        $mail->Username = '57joel39@gmail.com';          // Your Gmail address
        $mail->Password = 'your-app-password';           // Your Gmail app password (or Gmail password if less secure apps are enabled)
        $mail->SMTPSecure = 'tls';                       // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                               // TCP port to connect to

        // Recipients
        $mail->setFrom('57joel39@gmail.com', 'Miompolly'); // Sender's email and name
        $mail->addAddress($to);                            // Recipient's email

        // Content
        $mail->isHTML(true);                              // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message);                 // Convert newlines to <br> in HTML email
        $mail->AltBody = strip_tags($message);            // Plain text version of the message

        // Send the email
        $mail->send();
        $_SESSION['message'] = "Reply sent successfully!";
    } catch (Exception $e) {
        $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // Redirect back to the messages page
    header("Location: message.php");
    exit();
}
?>
