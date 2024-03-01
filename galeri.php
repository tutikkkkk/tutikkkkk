<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Upload Photo</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <label for="newImage">Select Image:</label>
            <input type="file" name="newImage" id="newImage" accept="image/*">

            <button type="submit">Upload</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["newImage"])) {
            $imageDirectory = 'images/';
            $targetFile = $imageDirectory . basename($_FILES["newImage"]["name"]);
            $uploadSuccess = move_uploaded_file($_FILES["newImage"]["tmp_name"], $targetFile);

            echo '<div class="message ' . ($uploadSuccess ? 'success' : 'error') . '">';
            echo $uploadSuccess ? "Photo uploaded successfully!" : "Failed to upload photo.";
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
