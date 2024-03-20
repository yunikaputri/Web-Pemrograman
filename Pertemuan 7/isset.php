<?php
// Memeriksa apakah variabel $umur sudah didefinisikan dan memiliki nilai yang lebih besar dari atau sama dengan 18
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa. ";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}
?>