<?php
session_start();
$user_otp = $_POST['otp'];

if ($user_otp == $_SESSION['otp']) {
    $email = $_SESSION['email'];
    $timestamp = date("Y-m-d H:i:s");

    // حفظ في ملف نصي
    $file = fopen("users.txt", "a");
    fwrite($file, "[$timestamp] Email: $email - Verified\n");
    fclose($file);

    echo "<h3>✅ OTP Verified! Welcome to Dexter Store.</h3>";
    echo "<a href='dashboard.php'>Go to your dashboard</a>";
} else {
    echo "<h3>❌ Invalid OTP. Try again.</h3>";
    echo "<a href='register.html'>Back</a>";
}
?>
