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
echo "<br>";

// Membandingkan dan mencetak dua variabel 
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
echo "<br>";

// Menghasilkan dan mencetak nilai boolean berdasarkan kondisi dari variabel
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND Logis: " . $hasilAnd . "<br>";
echo "Hasil OR Logis: " . $hasilOr . "<br>";
echo "Hasil NOT Logis A: " . $hasilNotA . "<br>";
echo "Hasil NOT Logis B: " . $hasilNotB . "<br>";
echo "<br>";

// Mengganti dan mencetak nilai variabel $a dengan hasil operasi dengan variabel $b
$a += $b;
echo "Nilai A setelah operasi penambahan: " . $a . "<br>";
$a -= $b;
echo "Nilai A setelah operasi pengurangan: " . $a . "<br>";
$a *= $b;
echo "Nilai A setelah operasi perkalian: " . $a . "<br>";
$a /= $b;
echo "Nilai A setelah operasi pembagian: " . $a . "<br>";
$a %= $b;
echo "Nilai A setelah operasi modulus: " . $a . "<br>";
echo "<br>";

// Membandingkan dan mencetak dua variabel menggunakan operator identitas 
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: " . $hasilIdentik . "<br>";
echo "Hasil Tidak Identik: " . $hasilTidakIdentik . "<br>";
echo "<br>";

// Soal cerita: menghitung persen kursi yang masih kosong di restoran
$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi kosong: " . $kursiKosong . "<br>";
echo "Presentase kursi kosong: " . $persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100 . "%" . "<br>";
?>