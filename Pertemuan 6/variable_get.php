<?php

// penggunaan variabel get yang berisi nilai dari query string
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia'];

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>