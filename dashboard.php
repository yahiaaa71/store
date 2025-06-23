<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.html");
    exit;
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Dexter Store</title>
</head>
<body>
  <h2>👋 Welcome, <?php echo $email; ?>!</h2>

  <p>🛒 <a href="view_purchases.php">View Your Purchases</a></p>
  <p>🚪 <a href="logout.php">Logout</a></p>

  <footer>
    <p>&copy; 2025 Dexter Store. All rights reserved.</p>
  </footer>
</body>
</html>
