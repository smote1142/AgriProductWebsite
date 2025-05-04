<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
</head>
<body>
  <header>
    <h1>Welcome to My Website</h1>
    <!-- Signup form -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br>
      <input type="submit" name="signup" value="Sign Up">
    </form>
  </header>
  <main>
    <!-- Main content -->
  </main>
  <footer>
    <!-- Login form -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br>
      <input type="submit" name="login" value="Log In">
    </form>
  </footer>
  <?php
  // Database configuration
  $db_host = 'localhost';
  $db_user = 'username';
  $db_pass = 'password';
  $db_name = 'database';

  // Create database connection
  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Sign up form submission
      if (isset($_POST['signup'])) {
          // Get form data
          $username = $_POST["username"];
          $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

          // Prepare insert statement
          $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
          $stmt->bind_param("ss", $username, $password);

          // Execute statement
          if ($stmt->execute()) {
              echo "Successfully signed up. Please log in.";
          } else {
              echo "Error: " . $stmt->error;
          }

          // Close statement
          $stmt->close();
      }
      // Login form submission
      elseif (isset($_POST['login'])) {
          // Get form data
          $username = $_POST["username"];
          $password = $_POST["password"];

          // Prepare select statement
          $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
          $stmt->bind_param("s", $username);

          // Execute statement
          $stmt->execute();
          $result = $stmt->get_result();
          $row = $result->fetch_assoc();

          // Check password
          if (password_verify($password, $row["password"])) {
              // Start session
              session_start();
              // Set session variables
              $_SESSION["loggedin"] = true;
              $_SESSION["userid"] = $row["id"];
              // Redirect to welcome page
              header("location: welcome.php");
          } else {
              echo "Invalid password.";
          }

          // Close statement
          $stmt->close();
      }
  }

  // Close connection
  $conn->close();
  ?>
</body>
</html>