<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['productId'])) {
        $productId = intval($_POST['productId']); // Sanitize product ID

        // SQL to delete the item from the cart
        $sql_remove_item = "DELETE FROM cart WHERE product_id = $productId";

        if ($conn->query($sql_remove_item) === TRUE) {
            echo "Item removed successfully from the cart.";
        } else {
            echo "Error removing item: " . $conn->error;
        }
    } else {
        echo "Product ID is not set.";
    }
}

$conn->close();
?>
