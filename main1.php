<?php
// Start a session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    // Redirect to the login page
    header("Location: login.html");
    exit(); // Ensure no further script execution
}

// MySQL server configuration
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "agri"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user profile information
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Fetch user data
    $row = $result->fetch_assoc();
    $userId = $row['id'];
    $email = $row['email'];
    // Store user profile information in session variables
    $_SESSION['userId'] = $userId;
    $_SESSION['email'] = $email;
} else {
    echo "Error fetching user profile.";
}

// Close connection
$conn->close();

// Redirect to main.html
header("Location: main.php");
exit();
?>
