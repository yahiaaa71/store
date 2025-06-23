<?php
session_start();
$user_otp = $_POST['otp'];

if ($user_otp == $_SESSION['otp']) {
    $_SESSION['logged_in'] = true;
    header("Location: dashboard.php");
    exit;
} else {
    echo "<h3>❌ Invalid OTP. Try again.</h3>";
    echo "<a href='login.html'>Back</a>";
}
?>
