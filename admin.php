<?php
session_start();

$admin_email = "admin@dexterstore.com";
$admin_pass = "123456"; // ⚠️ يجب تغييره لاحقًا

// تسجيل دخول المدير
if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($_POST['email'] === $admin_email && $_POST['password'] === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        echo "❌ Incorrect login.";
    }
}

if (!isset($_SESSION['admin_logged_in'])):
?>

<form method="POST">
  <h2>🔐 Admin Login</h2>
  <input type="email" name="email" placeholder="Admin Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="submit" value="Login">
</form>

<?php else: ?>
<h2>📊 Admin Panel - Dexter Store</h2>

<h3>📄 Latest Purchases:</h3>
<ul>
<?php
if (file_exists("purchases.txt")) {
    $lines = file("purchases.txt");
    $lines = array_reverse($lines); // الأحدث أولاً
    foreach ($lines as $line) {
        echo "<li>" . htmlspecialchars($line) . "</li>";
    }
}
?>
</ul>

<p><a href="logout.php">Logout Admin</a></p>
<?php endif; ?>
