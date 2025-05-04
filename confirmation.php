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

// Fetch the latest order details from the orders table
$sql = "SELECT * FROM orders ORDER BY order_date DESC LIMIT 1"; // Fetch the latest order
$result = $conn->query($sql);

// Check if there is a result
if ($result->num_rows > 0) {
    // Output data of each row
    $order = $result->fetch_assoc();
} else {
    echo "No orders found.";
}

// Close the connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50; /* Green color for success */
        }

        .order-details {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .order-details p {
            margin: 10px 0;
        }

        .order-status {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .order-status h2 {
            margin-bottom: 10px;
        }

        .order-status p {
            margin: 5px 0;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        nav li {
            float: left;
        }
        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav li a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>

<nav>
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="contactus.html">contact us</a></li>
            <li><a href="Aboutus.html">About us</a></li>
            <li><a href="addToCart.php">Cart</a></li>
            <li><a href="search.html">Search</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1><span style="color: #4CAF50;">&#10004;</span> Order Successful </h1>
        <div>
            <!-- Display order details -->
            <p><strong>Full Name:</strong> <?php echo $order['fullname']; ?></p>
            <p><strong>Email:</strong> <?php echo $order['email']; ?></p>
            <p><strong>Phone:</strong> <?php echo $order['phone']; ?></p>
            <p><strong>Address:</strong> <?php echo $order['address']; ?></p>
            <p><strong>City:</strong> <?php echo $order['city']; ?></p>
            <p><strong>Zip Code:</strong> <?php echo $order['zip']; ?></p>
            <p><strong>Payment Method:</strong> <?php echo $order['payment']; ?></p>
        </div>
    </div>


    <!-- Sound effect -->
    <audio id="successSound">
        <source src="orderconfirmed.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="order-status">
        <h2>Order Status</h2>
        <p>Order packed on: June 1, 2024</p>
        <p>Order shipped on: June 2, 2024</p>
        <p>Order delivered on: June 4, 2024</p>
    </div>
    <script>
        // Play success sound
        var successSound = document.getElementById("successSound");
        successSound.play();
    </script>
</body>
</html>
