<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit;
}

$email = $_SESSION['email'];
$purchases_file = 'purchases.txt';
?>

<!DOCTYPE html>
<html>
<head><title>Your Purchases</title></head>
<body>
  <h2>📦 Your Purchase History</h2>
  <ul>
    <?php
    if (file_exists($purchases_file)) {
        $lines = file($purchases_file);
        foreach ($lines as $line) {
            if (strpos($line, $email) !== false) {
                echo "<li>" . htmlspecialchars($line) . "</li>";
            }
        }
    } else {
        echo "<li>No purchases found.</li>";
    }
    ?>
  </ul>

  <p><a href="dashboard.php">⬅️ Back to Dashboard</a></p>
</body>
</html>
