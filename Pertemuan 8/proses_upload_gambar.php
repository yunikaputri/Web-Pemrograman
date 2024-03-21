<?php
// Mengelola unggahan gambar dari form HTML dan menyimpannya ke dalam direktori yang ditentukan
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "C:/xampp/htdocs/dasarWeb/Pertemuan 8/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['imageFiles']['name'][0]) {
    $totalFiles = count($_FILES['imageFiles']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['imageFiles']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        //Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['imageFiles']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah. <br>";
        } else {
            echo "Gagal mengunggah file $fileName. <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
