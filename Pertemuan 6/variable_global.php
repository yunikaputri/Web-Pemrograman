<?php
/* penggunaan variabel global untuk menyimpan semua variabel global 
atau bisa disebut dengan array asosiatif */
$x =75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>