<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri1";

// SQL query to create the 'products1' table
$sql_create_table = "CREATE TABLE IF NOT EXISTS product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    image_url VARCHAR(255)
)";

// Product details
$products = [
    ["name" => "NPK 20:20:20", "price" => 400, "description" => "Description of Product 1", "image_url" => "fertilizer1.jpg"],
    ["name" => "Active 13:00", "price" =>300, "description" => "Description of Product 2", "image_url" => "fertilizer2.jpg"],
    ["name" => "plantic flower", "price" =>500, "description" => "Description of Product 3", "image_url" => "fertilizer3.jpg"],
    ["name" => "compo fert", "price" => 400, "description" => "Description of Product 4", "image_url" => "fertilizer4.jpg"],
    ["name" => "planting tools", "price" => 450, "description" => "Description of Product 5", "image_url" => "gardening1.jpg"],
    ["name" => "gardening tools", "price" => 550, "description" => "Description of Product 6", "image_url" => "gardening2.jpg"],
    ["name" => "Agriculture tools", "price" => 460, "description" => "Description of Product 1", "image_url" => "gardening3.jpg"],
    ["name" => "Agri Tools", "price" => 560, "description" => "Description of Product 2", "image_url" => "gardening4.jpg"],
    ["name" => "irrigation system", "price" =>700, "description" => "Description of Product 3", "image_url" => "irrigation1.jpg"],
    ["name" => "Flying irrigation", "price" => 470, "description" => "Description of Product 4", "image_url" => "irrigation2.jpg"],
    ["name" => "water spring", "price" => 630, "description" => "Description of Product 5", "image_url" => "irrigation3.jpg"],
    ["name" => "vegetables seeds", "price" => 300, "description" => "Description of Product 6", "image_url" => "irrigation4.jpg"],
    ["name" => "farm sokart", "price" => 580, "description" => "Description of Product 1", "image_url" => "organic1.jpg"],
    ["name" => "ugaoo organic", "price" => 490, "description" => "Description of Product 2", "image_url" => "organic2.jpg"],
    ["name" => "beetroot seeds", "price" => 550, "description" => "Description of Product 3", "image_url" => "organic3.jpg"],
    ["name" => "pest control", "price" => 540, "description" => "Description of Product 4", "image_url" => "organic4.jpg"],
    ["name" => "miticide fert", "price" =>800, "description" => "Description of Product 5", "image_url" => "pestcontrol1.jpg"],
    ["name" => "insect pesticide", "price" => 670, "description" => "Description of Product 6", "image_url" => "pestcontrol2.jpg"],
    ["name" => "solemon seeds", "price" => 595, "description" => "Description of Product 1", "image_url" => "pestcontrol3.jpg"],
    ["name" => "plant caring", "price" => 5400, "description" => "Description of Product 2", "image_url" => "pestcontrol4.jpg"],
    ["name" => "vermicompost organic", "price" => 860, "description" => "Description of Product 3", "image_url" => "plantcare1.jpg"],
    ["name" => "plant care", "price" => 768, "description" => "Description of Product 4", "image_url" => "plantcare2.jpg"],
    ["name" => "plant tonic", "price" => 568, "description" => "Description of Product 5", "image_url" => "plantcare3.jpg"],
    ["name" => "corn seeds", "price" => 567, "description" => "Description of Product 6", "image_url" => "plantcare4.jpg"],
    ["name" => "aadhya cotton", "price" => 786, "description" => "Description of Product 1", "image_url" => "seed1.jpg"],
    ["name" => "ellorn seed ", "price" => 675, "description" => "Description of Product 2", "image_url" => "seed2.jpg"],
    ["name" => "ellorn chilly", "price" => 459, "description" => "Description of Product 3", "image_url" => "seed3.jpg"],
    ["name" => "organic flower", "price" => 754, "description" => "Description of Product 4", "image_url" => "seed4.jpg"],
    ["name" => "miticide tonic", "price" => 420, "description" => "Description of Product 5", "image_url" => "fertilizer3.jpg"],
    ["name" => "gardening tools ", "price" => 879, "description" => "Description of Product 6", "image_url" => "pestcontrol2.jpg"],
];
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the SQL query to create the 'products1' table
if ($conn->query($sql_create_table) === TRUE) {
    // Insert products into the database
    foreach ($products as $product) {
        $name = $product['name'];
        $price = $product['price'];
        $description = $product['description'];
        $image_url = $product['image_url'];

        $sql = "INSERT INTO product (name, price, description, image_url) VALUES ('$name', $price, '$description', '$image_url')";

        if ($conn->query($sql) === TRUE) {
            echo "Product inserted successfully: $name<br>";
        } else {
            echo "Error inserting product: $name - " . $conn->error . "<br>";
        }
    }
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <style>
        /* CSS styles for product display */
        .product {
            display: inline-block;
            width: 200px; /* Adjust as needed */
            margin: 10px; /* Adjust as needed */
            text-align: center;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        .product .product-name {
            font-weight: bold;
            margin-top: 5px;
        }

        .product .product-price {
            margin-top: 5px;
            color: green;
        }

        .product .product-description {
            margin-top: 5px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<?php
// Connect to your MySQL database
$mysqli = new mysqli("localhost", "root", "", "agri");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to fetch product data
$sql = "SELECT * FROM product";
$result = $mysqli->query($sql);

// Fetch product data and display each product
while ($row = $result->fetch_assoc()) {
    echo "<div class='product1'>";
    echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'><br>";
    echo "<div class='product-name'>" . $row['name'] . "</div>";
    echo "<div class='product-price'>₹" . $row['price'] . "</div>"; // Display price in rupees

    echo "<div class='product-description'>" . $row['description'] . "</div>";
    echo "</div>";
}

// Close database connection
$mysqli->close();
?>

</body>
</html>
