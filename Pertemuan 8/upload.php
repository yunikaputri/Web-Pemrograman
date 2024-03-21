<?php
// Mengelola unggahan file dari form_upload.php
if (isset($_POST["submit"])) {
    $targetDirectory = "C:/xampp/htdocs/dasarWeb/Pertemuan 8/"; // Ganti dengan path yang sesuai
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Melakukan validasi tipe file yang diunggah
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        // Melakukan validasi ukuran file yang diunggah
        $maxFileSize = 5 * 1024 * 1024; // 5 MB
    
        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "File berhasil diunggah.";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
?>
