<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      margin-top: 0;
      text-align: center;
      color: #333;
    }
    p {
      font-size: 18px;
      color: #333;
    }
    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
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
  </style>
</head>
<body>
<div class="navbar">
    <a href="main.php">Home</a>
    <a href="contactus.html">Contact</a>
    <a href="aboutus.html">About</a>
    <a href="addToCart.php">Cart</a> <!-- Add Cart button -->
    <a href="confirmation.php">Order</a> <!-- Add Order button -->
    <a href="search.html">search</a>
</div>
  <div class="container">
    <h2>Profile</h2>
    <?php
      // Check if session variables are set and user is logged in
      if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
          // Display user's login credentials
          echo "<p>Welcome, " . $_SESSION['username'] . "!</p>";
      
      } else {
          // If not logged in, redirect to login page
          header("Location: login.html");
          exit();
      }
    ?>
    <!-- Logout Button -->
    <form method="post" action="logout.php">
      <button type="submit" name="logout">Logout</button>
    </form>
    
  </div>
</body>
</html>
