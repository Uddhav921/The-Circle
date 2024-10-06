

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
            <div class="logo">The circle</div>
            <h1>Sign in to the institue</h1>
           
           <form action="/Project/Php/login.php" method="POST" name="regForm" >
                <input type="text" name="username" placeholder="Username" required>
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

