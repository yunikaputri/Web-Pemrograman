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

            // Membuat thumbnail
            if (function_exists('createThumbnail')) {
                createThumbnail($targetFile, "thumbnails/" . basename($targetFile), 200);
                echo "<br><br>";
                echo '<img src="thumbnails/' . basename($targetFile) . '" alt="Thumbnail">';
            } else {
                echo "GD Library tidak tersedia, thumbnail tidak dapat dibuat.";
            }
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}

function createThumbnail($sourceFile, $targetFile, $maxWidth)
{
    list($sourceWidth, $sourceHeight, $sourceType) = getimagesize($sourceFile);

    // Menghitung tinggi thumbnail sesuai dengan lebar 200
    $maxHeight = ($maxWidth / $sourceWidth) * $sourceHeight;

    // Membuat gambar thumbnail
    $thumb = imagecreatetruecolor($maxWidth, $maxHeight);
    if ($sourceType == IMAGETYPE_JPEG) {
        $sourceImage = imagecreatefromjpeg($sourceFile);
    } elseif ($sourceType == IMAGETYPE_PNG) {
        $sourceImage = imagecreatefrompng($sourceFile);
    } elseif ($sourceType == IMAGETYPE_GIF) {
        $sourceImage = imagecreatefromgif($sourceFile);
    } else {
        return false; // Tidak dapat membuat thumbnail untuk tipe file yang tidak didukung
    }

    // Menyalin dan mengubah ukuran gambar sumber ke thumbnail
    imagecopyresampled($thumb, $sourceImage, 0, 0, 0, 0, $maxWidth, $maxHeight, $sourceWidth, $sourceHeight);

    // Menyimpan thumbnail sebagai file
    if ($sourceType == IMAGETYPE_JPEG) {
        imagejpeg($thumb, $targetFile);
    } elseif ($sourceType == IMAGETYPE_PNG) {
        imagepng($thumb, $targetFile);
    } elseif ($sourceType == IMAGETYPE_GIF) {
        imagegif($thumb, $targetFile);
    }

    imagedestroy($thumb);
    imagedestroy($sourceImage);
}
?>
