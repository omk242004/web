<?php
// Start the session
session_start();

// Check if the user has submitted the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the username from the form
    $username = htmlspecialchars(trim($_POST['username']));
    
    // Set a cookie for the username
    if (!empty($username)) {
        setcookie("username", $username, time() + (86400 * 30), "/"); // 86400 = 1 day
        // Redirect to the same page to show welcome message
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $error_message = "Please enter a username!";
    }
}

// Check if the cookie is set
if (isset($_COOKIE['username'])) {
    $username = htmlspecialchars($_COOKIE['username']);
} else {
    $username = null;
}

// Check if the user wants to log out
if (isset($_GET['logout'])) {
    // Delete the cookie by setting its expiration time to the past
    setcookie("username", "", time() - 3600, "/");
    $username = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Management Example</title>
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
        input[type="submit"], a.logout {
            padding: 10px;
            border: none;
            background-color: #5cb85c;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        input[type="submit"]:hover, a.logout:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Cookie Management in PHP</h1>
    
    <?php
    if (!empty($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }

    if ($username) {
        echo "<h2>Welcome, $username!</h2>";
        echo '<p><a class="logout" href="?logout=true">Logout</a></p>';
    } else {
        echo '<p>Please enter your username to set a cookie:</p>';
        echo '<form method="post" action="">
                <input type="text" name="username" placeholder="Username" required>
                <input type="submit" value="Set Cookie">
              </form>';
    }
    ?>

</body>
</html>
