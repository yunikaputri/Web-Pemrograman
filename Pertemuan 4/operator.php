<?php
// Melakukan beberapa operasi aritmatika dasar antara dua variabel
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penambahan: $a + $b = $hasilTambah <br>";
echo "Hasil Pengurangan: $a - $b = $hasilKurang <br>";
echo "Hasil Perkalian: $a * $b = $hasilKali <br>";
echo "Hasil Pembagian: $a / $b = $hasilBagi <br>";
echo "Sisa Pembagian: $a % $b = $sisaBagi <br>";
echo "Hasil Perpangkatan: $a ^ $b = $pangkat <br>";

// Membandingkan dua variabel 
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: " . $hasilSama . "<br>";
echo "Hasil Tidak Sama: " . $hasilTidakSama . "<br>";
echo "Hasil Lebih Kecil: " . $hasilLebihKecil . "<br>";
echo "Hasil Lebih Besar: " . $hasilLebihBesar . "<br>";
echo "Hasil Lebih Kecil Sama: " . $hasilLebihKecilSama . "<br>";
echo "Hasil Lebih Besar Sama: " . $hasilLebihBesarSama . "<br>";
?>