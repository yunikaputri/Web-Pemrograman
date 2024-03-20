<?php
// Memeriksa apakah variabel $umur sudah didefinisikan dan memiliki nilai yang lebih besar dari atau sama dengan 18
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa. ";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br/>";
}

// Memeriksa apakah kunci "nama" telah didefinisikan dalam array $data sebelum mencoba mengakses nilainya
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array";
}
?>