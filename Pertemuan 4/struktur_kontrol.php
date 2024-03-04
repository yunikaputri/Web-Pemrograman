<?php
// Menentukan dan mencetak nilai huruf berdasarkan nilai numerik
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

// Menghitung dan mencetak berapa hari yang diperlukan atlet untuk mencapai jarak target
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilomter.";
echo "<br><br>";

// Menghitung dan mencetak total buah yang akan dipanen
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";

// Menghitung dan mencetak total skor ujian dari array
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";

// Mengecek setiap nilai dalam array dan mencetak apakah siswa tersebut lulus atau tidak
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

// Soal cerita: menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$jumlahNilai = count($nilaiSiswa);
$nilaiTerabaikan = 2;
$nilaiTotal = array_slice($nilaiSiswa, $nilaiTerabaikan, $jumlahNilai - (2 * $nilaiTerabaikan));

$totalNilai = array_sum($nilaiTotal);

$rataRata = $totalNilai / count($nilaiTotal);

echo "Daftar nilai siswa: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $rataRata <br><br>";

// Menghitung dan mencetak harga yang harus dibayar setelah mendapatkan diskon
$hargaProduk = 120000;
$batasDiskon = 100000;
$diskon = 20;

if ($hargaProduk > $batasDiskon) {
    $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * ($diskon / 100));
} else {
    $hargaSetelahDiskon = $hargaProduk;
}
echo "Harga produk sebelum diskon: Rp $hargaProduk <br>";
echo "Harga produk setelah diskon: Rp $hargaSetelahDiskon <br><br>";

/* Membuat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)” */
$poin = 600;
$totalSkor = $poin;

$mendapatkanHadiah = ($totalSkor > 500) ? "YA": "TIDAK";
echo "Total skor pemain adalah: $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $mendapatkanHadiah";
?>