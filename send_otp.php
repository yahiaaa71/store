<?php
session_start();

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $otp = rand(100000, 999999);

    $_SESSION['email'] = $email;
    $_SESSION['otp'] = $otp;

    $subject = "Dexter Store - Your OTP Code";
    $message = "Hello,\n\nYour OTP verification code is: $otp\n\nThanks,\nDexter Store";
    $headers = "From: support@dexterstore.com";

    mail($email, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Verify OTP - Dexter Store</title>
</head>
<body>
  <h2>Enter the OTP sent to your email</h2>
  <form method="POST" action="verify_otp.php">
    <input type="text" name="otp" placeholder="Enter OTP" required><br><br>
    <input type="submit" value="Verify">
  </form>

  <footer>
    <p>&copy; 2025 Dexter Store. All rights reserved.</p>
  </footer>
</body>
</html>
