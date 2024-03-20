<! DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <!-- Membuat form input dengan method POST yang mengarah ke file proses_form.php -->
    <h2>Form Input PHP</h2>
    <form method="post" action="proses_form.php">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>