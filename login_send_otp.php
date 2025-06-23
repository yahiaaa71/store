<?php
session_start();

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $otp = rand(100000, 999999);

    $_SESSION['email'] = $email;
    $_SESSION['otp'] = $otp;

    $subject = "Dexter Store - Login OTP";
    $message = "Hello,\n\nYour login OTP is: $otp\n\n- Dexter Store Team";
    $headers = "From: support@dexterstore.com";

    mail($email, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html>
<head><title>Enter OTP</title></head>
<body>
  <h2>Enter OTP sent to your email</h2>
  <form method="POST" action="login_verify_otp.php">
    <input type="text" name="otp" placeholder="Enter OTP" required><br><br>
    <input type="submit" value="Verify">
  </form>
</body>
</html>
