<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $otp = rand(100000, 999999);
        // هنا ترسل الايميل (مثلاً mail())
        mail($email, "Your OTP Code", "Your OTP is: $otp", "From: no-reply@dexterstore.com");
        echo "OTP sent to $email";
    } else {
        echo "Invalid email";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
