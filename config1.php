<?php
// Database connection parameters
$servername = "127.0.0.1:3307"; // Change this if your MySQL server is on a different host
$username = "root";
$password = "";
$dbname = "shetticom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
