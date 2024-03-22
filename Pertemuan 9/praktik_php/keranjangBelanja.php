<html>
    <head>
    </head>
    <body>
    <!-- Menampilkan jumlah novel dan buku yang telah dibeli dari cookie yang diset sebelumnya -->
    <h2> Keranjang Belanja </h2>

    <?php
    $beliNovel = $_COOKIE ['beliNovel'];
    $beliBuku = $_COOKIE ['beliBuku'] ;

    echo "Jumlah Novel:" . $beliNovel ."<br>";
    echo "Jumlah Buku :" . $beliBuku ;
    ?>

    </body>
</html>