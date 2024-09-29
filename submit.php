<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        try {
          
            $stmt = $pdo->prepare("INSERT INTO messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);
            if ($stmt->execute()) {              
                $_SESSION['message'] = "Message sent successfully!";
            } else {
                // Store an error message in the session
                $_SESSION['message'] = "Failed to send the message.";
            }
        } catch (PDOException $e) {
            // Store an error message in case of exception
            $_SESSION['message'] = "Error: " . $e->getMessage();
        }
    } else {
        // Store an error message for invalid input
        $_SESSION['message'] = "All fields are required!";
    }

    // Redirect back to the form page (or another page)
    header("Location: contact.php");
    exit();
}
?>
