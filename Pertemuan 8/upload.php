<?php
// Mengelola unggahan file dari form_upload.php
if (isset($_POST["submit"])) {
    $targetDirectory = "/dasarWeb/Pertemuan 8"; // Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

    // Memberikan pesan sukses atau gagal sesuai dengan hasilnya
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>