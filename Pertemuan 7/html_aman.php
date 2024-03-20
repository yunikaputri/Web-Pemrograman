<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Input: <input type="text" name="input">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Memeriksa apakah form sudah disubmit menggunakan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai input dari form dan menghindari serangan XSS
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        // Menampilkan input yang dimasukkan
        echo "Input yang dimasukkan: " . $input;
    }
    ?>
</body>
</html>
