<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$conn = new mysqli("localhost", "root", "", "consults_db");

$name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course_id = $_POST['course_id'];

$stmt = $conn->prepare("INSERT INTO registrations (full_name, email, phone, selected_course) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $email, $phone, $course_id);
$stmt->execute();

$course = $conn->query("SELECT title FROM courses WHERE id=$course_id")->fetch_assoc();
$course_title = $course['title'];

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.yourdomain.com'; // Set your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'your@email.com';
    $mail->Password = 'yourpassword';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('no-reply@yourdomain.com', 'Course Registration');
    $mail->addAddress($email);
    $mail->addAddress('admin@example.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = "Welcome to $course_title";
    $mail->Body = "
        <h2>Welcome, $name!</h2>
        <p>You have successfully registered for <strong>$course_title</strong>.</p>
        <p>We will contact you shortly with more information.</p>
    ";

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: thank_you.php");
exit;
