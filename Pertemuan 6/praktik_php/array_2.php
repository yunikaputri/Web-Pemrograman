<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Dosen</title>
    <link rel="stylesheet" type="text/css" href="stylearray2.css">
</head>
<body>
    <?php
    // mendefinisikan array asosiatif $Dosen yang berisi informasi tentang seorang dosen
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>
    <h2>Informasi Dosen</h2>
    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <?php foreach ($Dosen as $key => $value): ?>
            <tr>
                <td><?= ucwords(str_replace('_', ' ', $key)) ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
