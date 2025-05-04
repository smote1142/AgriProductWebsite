<?php
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

// SQL to create the contacts table if it doesn't exist
$sql_create_table = "CREATE TABLE IF NOT EXISTS contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    country VARCHAR(30),
    subject TEXT
)";

// Execute the SQL query to create the table
if ($conn->query($sql_create_table) === TRUE) {
    echo "";
} else {
    echo "Error creating table: " . $conn->error;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access form data using $_POST
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO contacts (firstname, lastname, country, subject) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $country, $subject);

    // Set parameters and execute
    $stmt->execute();

    echo "<script>
    alert('New record inserted successfully');
    window.location.href = 'main.php';
</script>";

    $stmt->close();
}

$conn->close();
?>
