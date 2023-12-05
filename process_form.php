<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Gửi email sử dụng PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Thay đổi thành địa chỉ SMTP server của bạn
        $mail->SMTPAuth = true;
        $mail->Username = 'your_username@example.com'; // Thay đổi thành tên người dùng của bạn
        $mail->Password = 'your_password'; // Thay đổi thành mật khẩu của bạn
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('maengseong@gmail.com'); // Thay đổi địa chỉ email của bạn ở đây

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'New Support Request';
        $mail->Body = "Name: $name\nEmail: $email\nMessage:\n$message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
