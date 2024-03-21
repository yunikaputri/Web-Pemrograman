<?php
// Memeriksa dan mengelola unggahan gambar, termasuk validasi ekstensi dan ukuran gambar
if (isset($_FILES['imageFiles'])) {
    $errors = array();
    $image_directory = "C:/xampp/htdocs/dasarWeb/Pertemuan 8/";

    if (!file_exists($image_directory)) {
        mkdir($image_directory, 0777, true);
    }

    foreach ($_FILES['imageFiles']['name'] as $key => $image_name) {
        $image_size = $_FILES['imageFiles']['size'][$key];
        $image_tmp = $_FILES['imageFiles']['tmp_name'][$key];
        $image_type = $_FILES['imageFiles']['type'][$key];
        $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_extensions = array("jpg", "jpeg", "png");

        if (in_array($image_ext, $allowed_extensions) === false) {
            $errors[] = "Ekstensi gambar yang diizinkan adalah JPG, JPEG, atau PNG.";
        }

        if ($image_size > 5242880) { // Batas ukuran: 5 MB
            $errors[] = 'Ukuran gambar tidak boleh lebih dari 5 MB';
        }

        if (empty($errors)) {
            move_uploaded_file($image_tmp, $image_directory . $image_name);
        }
    }

    if (empty($errors)) {
        echo "Gambar berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
