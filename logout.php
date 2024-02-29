<?php
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Logout</h1>
</header>

<div class="container">
    <h2>You have been successfully logged out.</h2>
    <p>Thank you for using our services. If you'd like to log in again, <a href="login.php">click here</a>.</p>
</div>

<footer>
    &copy; 2024 Your Company
</footer>

</body>
</html>
