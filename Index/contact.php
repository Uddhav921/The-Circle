<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - The Circle Institute</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Roboto', Arial, sans-serif;
            scroll-behavior: smooth;
            color: #333;
            line-height: 1.6;
            background-color: #f4f7f9;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        nav {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            padding: 20px 50px;
            align-items: center;
            justify-content: space-between;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .logo a {
            text-decoration: none;
            font-size: 28px;
            font-weight: 700;
            color: #007bff;
        }

        nav ul {
            display: flex;
        }

        nav ul li {
            list-style: none;
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        main {
            flex: 1;
            padding: 120px 20px 80px; /* Added padding to top and bottom */
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        #contact-form {
            display: flex;
            flex-direction: column;
        }

        #contact-form label {
            margin-left: 10px;
            margin-bottom: 5px;
            font-weight: 500;
            color: #333;
        }

        #contact-form input,
        #contact-form select,
        #contact-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 20px;
            margin-bottom: 20px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        #contact-form input:focus,
        #contact-form select:focus,
        #contact-form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        #contact-form textarea {
            height: 120px;
            resize: vertical;
        }

        #contact-form button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        #contact-form button:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                padding: 20px;
            }

            nav ul {
                margin-top: 20px;
            }

            nav ul li {
                margin-left: 15px;
            }

            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
<header>
        <nav>
            <h1 class="logo"><a href="home.php">The Circle</a></h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="course.php">Courses</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="Faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contact-form" onsubmit="return validateForm()" action="/Project/Php/contact.php" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email">

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" placeholder="Your phone number">

    <label for="enquiry-type">Enquiry Type</label>
    <select id="enquiry-type" name="enquiry_type">
        <option value="general">General</option>
        <option value="admission">Admission</option>
        <option value="support">Support</option>
    </select>

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Your message"></textarea>

    <button type="submit">Submit</button>
</form>

        </div>
    </main>

    <footer>
        <p>&copy; 2024 The Circle Institute. All rights reserved.</p>
    </footer>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var message = document.getElementById("message").value;

            if (name == "" || name == null) {
                alert("Name should not be empty!");
                return false;
            }
            if (email == "" || email == null) {
                alert("Email should not be empty!");
                return false;
            }
            if (phone == "" || phone == null) {
                alert("Phone should not be empty!");
                return false;
            }
            if (isNaN(phone)) {
                alert("Contact Number must be in numeric format!");
                return false;
            }
            if (phone.length < 10) {
                alert("Contact Number must be at least 10 digits long!");
                return false;
            }
            if (message == "" || message == null) {
                alert("Message should not be empty!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>