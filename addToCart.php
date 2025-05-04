<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        /* Navigation bar styles */
        .navbar {
            background-color: #333; /* Background color */
            overflow: hidden;
        }

        .navbar a {
            float: left; /* Float the links to the left */
            display: block;
            color: #f2f2f2; /* Text color */
            text-align: center;
            padding: 14px 16px; /* Padding around the links */
            text-decoration: none; /* Remove underline from links */
        }

        /* Change background color on hover */
        .navbar a:hover {
            background-color: #ddd; /* Background color on hover */
            color: #333; /* Text color on hover */
        }

        /* CSS styles for product display */
        .product-container {
            text-align: center; /* Center align the products */
        }

        .product {
            display: inline-block; /* Display products side by side */
            width: 200px; /* Fixed width */
            height: 300px; /* Fixed height */
            margin: 10px;
            text-align: left; /* Align text to the left within each product */
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .product img {
            width: 100%; /* Set image width to fill the container */
            height: 200px; /* Fixed height for images */
            object-fit: cover; /* Cover the container with the image */
            border-radius: 5px; /* Optional: Apply border-radius to the image */
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <div class="navbar">
        <a href="main.php">Home</a>
        <a href="products.html">Products</a>
        <a href="contactus.html">Contact</a>
        <a href="aboutus.html">About</a>
        <a href="search.html">search</a>
    </div>

    <!-- Product container -->
    <div class="product-container">
        <?php
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

        // SQL query to create the 'cart' table
        $sql_create_cart_table = "CREATE TABLE IF NOT EXISTS cart (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            product_id INT(6) NOT NULL
        )";

        // Execute the SQL query to create the 'cart' table
        if ($conn->query($sql_create_cart_table) === TRUE) {
            // Check if the 'productId' parameter is set in the POST request
            if(isset($_POST['productId'])) {
                // Get the product ID from the AJAX request and sanitize it
                $productId = intval($_POST['productId']); // Convert to integer for security
                
                // SQL to insert the product ID into the 'cart' table
                $sql_insert_cart = "INSERT INTO cart (product_id) VALUES ($productId)";

                if ($conn->query($sql_insert_cart) === TRUE) {
                    echo '<script type="text/javascript">
                        window.onload = function () { 
                            alert("Product added to cart successfully");
                            window.location.href = "main.php"; 
                        }; 
                    </script>';
                } else {
                    echo "Error: " . $sql_insert_cart . "<br>" . $conn->error;
                }
            } else {
                echo "";
            }

            // SQL to fetch cart items along with product details from products1 table only
            $sql_fetch_cart_items = "SELECT product.id, product.name, product.price, product.description, product.image_url FROM cart INNER JOIN product ON cart.product_id = product.id";
            $result = $conn->query($sql_fetch_cart_items);

            // Check if there are any items in the cart
            if ($result->num_rows > 0) {
                // Output data of each row
            
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'><br>";
                    echo "<div class='product-name'>" . $row['name'] . "</div>";
                    echo "<div class='product-price'>$" . $row['price'] . "</div>";
                    echo "<div class='product-description'>" . $row['description'] . "</div>";
                    // Add Remove button with onclick event to call removeItem() JavaScript function
                    echo "<button onclick='removeItem(" . $row['id'] . ")'>Remove</button>";
                    echo "</div>";
                }
            
                

                }
            } else {
                echo "No items in the cart";
            }
        
        $conn->close();
        ?>
        <?php
// Reset the result set cursor back to the beginning
$result->data_seek(0);

// Calculate total price of products in the cart
$totalPrice = 0;

// Iterate over the cart items and sum up their prices
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalPrice += $row['price'];
    }
}

// Display the total price
echo "<div>Total Price: " . $totalPrice . "</div>";

// Checkout button
echo "<a href='checkout.html'><button>Checkout</button></a>";
?>
<script>
function removeItem(productId) {
    if (confirm("Are you sure you want to remove this item from the cart?")) {
        // Send AJAX request to removeitem.php
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "removeitem.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Reload the page to reflect changes
                window.location.reload();
            }
        };
        xhr.send("productId=" + productId);
    }
}
</script>

    </div>
</body>
</html>
