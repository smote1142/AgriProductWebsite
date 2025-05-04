<?php
// Connect to your MySQL database
$mysqli = new mysqli("localhost", "root", "", "agri1");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to fetch product data
$sql = "SELECT productId, productName, price FROM products";
$result = $mysqli->query($sql);

// Fetch product data and store it in an array
$products = array();
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

// Close database connection
$mysqli->close();

// Return product data as JSON
header('Content-Type: application/json');
echo json_encode($products);
?>
