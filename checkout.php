<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit;
}

$email = $_SESSION['email'];
$product = $_POST['product_name'] ?? "Unknown Product";
$date = date("Y-m-d H:i:s");

$file = fopen("purchases.txt", "a");
fwrite($file, "[$date] Email: $email - Product: $product - Status: Pending Payment\n");
fclose($file);
?>

<!DOCTYPE html>
<html>
<head><title>Payment - Dexter Store</title></head>
<body>
<h2>💳 Complete Payment</h2>
<p>You're buying: <strong><?= htmlspecialchars($product) ?></strong></p>

<h3>Select Payment Method:</h3>
<ul>
  <li>🔗 <strong>USDT (TRC20)</strong>: <code>TXXX...123</code></li>
  <li>🟡 <strong>Binance Pay</strong>: Username: <code>dexter_pay</code></li>
  <li>🇱🇾 <strong>مصرف الجمهورية</strong>: رقم الحساب: <code>001-123456</code></li>
</ul>

<p>After payment, please send a screenshot to our support:</p>
<a href="https://t.me/Dexter4Store" target="_blank">📲 Telegram Support</a> |
<a href="https://wa.me/13183123918" target="_blank">💬 WhatsApp</a>

<p><strong>Note:</strong> Your order will be delivered manually within 15 minutes after payment verification.</p>

<p><a href="products.php">⬅ Back to Products</a></p>
</body>
</html>
