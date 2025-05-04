<?php
// Connect to your MySQL database
$mysqli = new mysqli("localhost", "root", "", "agri1");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to fetch product IDs from the cart
$sql = "SELECT product_id FROM cart";
$result = $mysqli->query($sql);

// Fetch product IDs and store them in an array
$cartItems = array();
while ($row = $result->fetch_assoc()) {
    $cartItems[] = $row['product_id'];
}

// Close database connection
$mysqli->close();

// Return product IDs as JSON
header('Content-Type: application/json');
echo json_encode($cartItems);
?>
