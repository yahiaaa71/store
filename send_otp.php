<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $otp = rand(100000, 999999);
        $subject = "Your Dexter Store OTP Code";
        $message = "Your OTP code is: $otp";
        $headers = "From: no-reply@dexterstore.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "OTP sent to $email";
        } else {
            echo "Failed to send OTP.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
