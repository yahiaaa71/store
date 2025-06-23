<?php
session_start();

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $otp = rand(100000, 999999);

    $_SESSION['email'] = $email;
    $_SESSION['otp'] = $otp;

    $subject = "Dexter Store - Login OTP";
    $
