<?php
session_start();

// لو المستخدم مسجل دخول، يوجهه لصفحة المنتجات
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: products.php");
    exit;
}

// لو ما سجل دخول، يوجه لصفحة تسجيل الدخول
header("Location: login.html");
exit;
?>
