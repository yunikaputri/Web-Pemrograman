<?php
// Memulai sesi PHP untuk menggunakan fitur session
    session_start ();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION ["favanimal"] = "cat";
            echo "Session variables are set.";
        ?>
    </body>
</html>