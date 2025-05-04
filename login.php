<?php
session_start(); // Start the session

// MySQL server configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "agri1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Set session variables
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $username;

        // Redirect to profile.php upon successful login
        header("Location: main.php");
        exit(); // Ensure no further script execution
    } else {
        $error = "Invalid username or password";
    }
}

// Close statement
$stmt->close();

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php if(isset($error)) { ?>
    <div><?php echo $error; ?></div>
<?php } ?>


</body>
</html>
