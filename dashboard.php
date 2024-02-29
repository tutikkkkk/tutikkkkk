<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #34495e;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
        }

        .welcome {
            margin-top: 20px;
        }

        .logout {
            margin-top: 20px;
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
    <h1>Dashboard</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Profile</a>
    <a href="#">Settings</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <h2>Welcome, <?php echo $username; ?>!</h2>

    <div class="welcome">
    </div>
</div>

<footer>
    &copy; 2024 Your Company
</footer>

</body>
</html>
