<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
// Check if email is submitted
if (isset($_POST['send'])) {
    // Get the email address
    $email = $_POST['email'];

    // Generate a random OTP (6 digits)
    $otp = rand(100000, 999999);

    // Store the OTP in session for later verification
    session_start();
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;

    // Subject and message for the OTP email
    $subject = "Your OTP Code";
    $message = "Your OTP code is: $otp\n\nPlease use this code to complete your verification.";
    $headers = "From: no-reply@gmail.com";

    // Send the OTP to the provided email address
    if (mail($email, $subject, $message, $headers)) {
        echo "OTP has been sent to $email.<br>";
        echo "<a href='verify_otp.php'>Click here to verify OTP</a>";
    } else {
        echo "Failed to send OTP. Please try again later.";
    }
} else {
    echo "Email is required.";
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <!-- <textarea name="sub" id=""></textarea> -->
        <textarea name="msg" id=""></textarea>
        <input type="submit" value="Submit" name="send">
    </form>
</body>
</html>
