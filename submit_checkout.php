<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri1"; // This should be the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); // Change $database to $dbname

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the orders table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address TEXT NOT NULL,
    city VARCHAR(50) NOT NULL,
    zip VARCHAR(10) NOT NULL,
    payment VARCHAR(50) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $payment = $_POST["payment"];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO orders (fullname, email, phone, address, city, zip, payment) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fullname, $email, $phone, $address, $city, $zip, $payment);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
