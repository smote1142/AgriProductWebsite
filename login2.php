<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('login.jpg'); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
        }
        .login-panel {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        h1 {
            color: #007bff;
            text-align: center;
        }
        p {
            line-height: 1.6;
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-panel">
        <h1>Login</h1>
        <p>Please enter your username and password to log in.</p>
        
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>

        <p>Don't have an account yet? <a href="signup.html">Sign Up</a></p>
    </div>
    <script>
        // Check if the user is already logged in based on session data
        <?php
            session_start();
            if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                echo 'alert("You are already logged in.");';
                // Redirect to main.php or another appropriate page if needed
                 echo 'window.location.href = "main.php";';
            }
        ?>
    </script>
</body>
</html>
