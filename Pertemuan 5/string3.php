<?php

// membalik string  menggunakan perintah strrev().
$pesan = "Saya arek Probolinggo";
echo strrev($pesan) . "<br>";


// membalik String lagi
$pesan = "Saya arek Probolinggo";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>