<?php
session_start(); // Start a PHP session

// Establish PostgreSQL connection
$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password='uddhav taur7777'");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Sanitize input
    $sanitized_username = pg_escape_string($conn, $username);
    $sanitized_password = pg_escape_string($conn, $password);

    // SQL query to check if username and password match
    $sql = "SELECT * FROM users WHERE username = '$sanitized_username' AND password = '$sanitized_password'";
    $result = pg_query($conn, $sql);

    if (!$result) {
        $error_message = "Query failed: " . pg_last_error($conn);
    } else {
        // Check if there is a matching row
        $row_count = pg_num_rows($result);
        if ($row_count > 0) {
            // Login successful
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $sanitized_username;
            header("Location: /Project/index/home.php"); // Redirect to homepage
            exit();
        } else {
            // Login failed, store error message
            $error_message = "Invalid username or password. Please try again.";
        }
    }
}

// Close connection
pg_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to The Circle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 1000px;
        }
        .preview {
            flex: 1;
            background-image: url('/Project/Asset/logo.jpeg');
            background-size: cover;
            background-position: center;
        }
        .login-form {
            flex: 1;
            padding: 40px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #ff4500;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .sign-in-btn {
            width: 100%;
            padding: 10px;
            background-color: #ff4500;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .signup-link {
            margin-top: 20px;
            text-align: center;
        }
        a {
            color: #ff4500;
            text-decoration: none;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="preview"></div>
        <div class="login-form">
            <div class="logo">The Circle</div>
            <h1>Sign in to the institute</h1>

            <!-- Show error message if login fails -->
            <?php if (isset($error_message)): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <form action="/Project/Php/login.php" method="POST">
                <input type="text" name="username" placeholder="Username" value="<?php echo isset($sanitized_username) ? htmlspecialchars($sanitized_username) : ''; ?>" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="sign-in-btn">Sign In</button>
            </form>

            <div class="signup-link">
                <p>Don't have an account? <a href="#">Sign Up now</a></p>
            </div>
        </div>
    </div>
</body>

</html>