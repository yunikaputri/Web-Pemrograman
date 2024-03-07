<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        .student-container {
            margin-left: 30px;
        }
    </style>
</head>
<body>

<h1>Data Mahasiswa Array Multidimensi</h2>

<?php
$students = [
    [
        "image" => "img/yunika.jpg",
        "nama" => "Yunika Puteri Dwi Antika",
        "nim" => 2241760048,
        "jurusan" => "Teknologi Informasi",
        "email" => "yunikaputridwia@gmail.com"
    ],
    [
        "image" => "img/ramzi.jpg",
        "nama" => "Muhammad Ramzi Lutfani",
        "nim" => 2242520192,
        "jurusan" =>  'Akuntasi',
        'email' =>'lutfaniramzi@gmail.com'
    ],
    [
        "image" => "img/abim.jpg",
        "nama" => "Bimantara Dwi Cahyo",
        "nim" => 2241720188,
        "jurusan" =>  'Teknologi Informasi',
        'email' =>'bmntrdwicahyo@gmail.com'
    ],
    [
        "image" => "img/fajar.jpg",
        "nama" => "Muhammad Ilham Fajar",
        "nim" => 224728474,
        "jurusan" =>  'Teknik Elektro',
        'email' =>'mfjrilaham@gmail.com'
    ],
    [
        "image" => "img/haqi.jpg",
        "nama" => "Muhammad Dhiyaulhaq",
        "nim" => 224792373,
        "jurusan" =>  'Teknik Listrik',
        'email' =>'mdhayulhaqq@gmail.com'
    ]
];

foreach ($students as $student) {
    echo "<div class='student-container'>"; 
    echo "<img src='" . $student['image'] . "' alt='" . $student['nama'] . "' width='200' height='200'><br>";
    echo "• Nama: " . $student['nama'] . "<br>";
    echo "• NIM: " . $student['nim'] . "<br>";
    echo "• Jurusan: " . $student['jurusan'] . "<br>";
    echo "• Email: <a href='mailto:" . $student['email'] . "'>" . $student['email'] . "</a><br><br>";
    echo "</div>";
}
?>
</body>
</html>
