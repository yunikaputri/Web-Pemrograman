<?php
// //merupakan fungsi tanpa parameter
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Yunika<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();

// // fungsi dengan parameter
// function perkenalan($nama, $salam){
//     echo $salam. ", ";
//     echo "Perkenalkan, nama saya " .$nama. "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Yunika " , "Hallo");

// echo "<hr>";

// $saya = "Yunika";
// $ucapanSalam = "Selamat pagi";

// // memanggil lagi
// perkenalan($saya, $ucapanSalam);

// fungsi dengan parameter default
// membuat fungsi
function perkenalan ($nama, $salam = "Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat perkenalan 
perkenalan("Yunika","Hallo");
echo "<hr>";
$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam perkenalan 
perkenalan($saya);
?>