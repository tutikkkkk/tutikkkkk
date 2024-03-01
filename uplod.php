<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["newImage"])) {
    $imageDirectory = 'images/';
    $targetFile = $imageDirectory . basename($_FILES["newImage"]["name"]);
    $uploadSuccess = move_uploaded_file($_FILES["newImage"]["tmp_name"], $targetFile);

    if ($uploadSuccess) {
        echo "Foto berhasil diunggah!";
    } else {
        echo "Gagal mengunggah foto.";
    }
}
?>
