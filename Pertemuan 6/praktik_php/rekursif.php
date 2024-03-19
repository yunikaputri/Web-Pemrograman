<?php
// rekrusif menampilakn teks
function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";

    tampilkanHaloDunia();
}

tampilkanHaloDunia();
?>