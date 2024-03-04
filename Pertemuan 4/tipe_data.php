<?php
// Melakukan operasi aritmatika sederhana dan mencetak nilai variabel serta tipe data variabel $e
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e); 
echo "<br>";

// Menghitung rata-rata dari tiga nilai yang diberikan dan mencetak nilai rata-rata serta tipe data variabel $rataRata.
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) /3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);

// Memeriksa nilai dari dua variabel boolean
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
echo "<br>";
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br>";

// Menggabungkan nama depan dan belakang menjadi nama lengkap menggunakan dua cara berbeda dan mencetak hasilnya
$namaDepan = "Ibnu";
$namaBelakang = 'Jakarta';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang:  ' . $namaBelakang .  "<br>";

echo $namaLengkap;

// Membuat array dan mencetak nama mahasiswa pertama dari array $listMahasiswa
$listMahasiswa = ["Wahid Andullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0]
?>