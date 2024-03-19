<?php
// // rekrusif menampilakn teks
// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();


// // rekursif menampilkan angka 1-25
// for($i=1; $i <= 25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }


// menggunakan konsep fungsi rekursif 
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
    
//panggil diri sendiri selama $indeks <<= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    } 
}
tampilkanAngka(20);
?>