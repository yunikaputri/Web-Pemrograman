<?php
    // Menghancurkan sesi dan menampilkan pesan logout berhasil
    session_start ();
    session_destroy ();

    echo "Anda berhasil logout";
?>