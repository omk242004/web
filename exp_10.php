<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    $username = htmlspecialchars($_SESSION['username']);
    echo "<h1>Welcome, $username!</h1>";
    echo '<p><a href="logout.php">Logout</a></p>';
} else {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the username from the form
        $username = htmlspecialchars(trim($_POST['username']));
        
        // Validate the username
        if (!empty($username)) {
            // Store the username in session variables
            $_SESSION['username'] = $username;

            // Redirect to the same page to show welcome message
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $error_message = "Username cannot be empty!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Management Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 400px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            border: none;
            background-color: #5cb85c;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Session Management in PHP</h1>
    
    <?php
    if (isset($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }
    ?>

    <p>Please enter your username to log in:</p>

    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="submit" value="Login">
    </form>

</body>
</html>

<?php
}
?>
