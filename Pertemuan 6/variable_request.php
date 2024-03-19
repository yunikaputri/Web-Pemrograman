<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<!-- penggunaan variabel request untuk menyimpan data yang dikirim bersamaan dengan request user -->
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];//pada baris ini akan terjadi error karena harus memasukkan nama terlebih dahulu pada kotak diatasnya
    if (empty($name)) {
    echo "Name is empty";
    } else {
    echo $name;
    }
} 
?>
</body>
</html>