<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3>Time</h3>
        <?php 
        // menampilkan waktu saat ini dalam format jam:menit:detik AM/PM dengan menetapkan zona waktu
            date_default_timezone_set("asia/jakarta");
            echo date ("h:i:sa");
        ?>
    </body>
</html>