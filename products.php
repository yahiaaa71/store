<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit;
}

$products = [
    ["id" => 1, "name" => "Netflix Premium - 1 Month", "price" => "4 USD"],
    ["id" => 2, "name" => "Snapchat Plus - 3 Month", "price" => "4 USD"],
    ["id" => 3, "name" => "Shahid VIP - 1 Month", "price" => "6 USD"],
    ["id" => 4, "name" => "iPhone +", "price" => "7 USD"],
    ["id" => 5, "name" => "Custom Digital Card", "price" => "Varies"],
];
?>

<!DOCTYPE html>
<html>
<head><title>Dexter Store - Products</title></head>
<body>
<h2>🛍️ Available Digital Products</h2>
<ul>
  <?php foreach ($products as $product): ?>
    <li>
      <strong><?= $product["name"] ?></strong> - <?= $product["price"] ?>
      <form method="POST" action="checkout.php" style="display:inline;">
        <input type="hidden" name="product_name" value="<?= $product["name"] ?>">
        <button type="submit">Buy Now</button>
      </form>
    </li>
  <?php endforeach; ?>
</ul>

<p><a href="dashboard.php">⬅ Back to Dashboard</a></p>
</body>
</html>
