<?php
// membuat menu bertingkat
$menu = [
    [ 
    "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                    "nama" => "Pantai"
                    ],
                    [
                    "nama" => "Gunung"
                    ]
                ]
            ],
        [
            "nama" => "Kuliner"
        ],
        [
            "nama" => "Hiburan"
        ]
    ]
    ],
    [
    "nama" => "Tentang"
    ],
    [
    "nama" => "Kontak"
    ]
];

// // fungsi untuk menampilkan array
// function tampilkanMenuBertingkat (array $menu) {
//     echo "<ul>";
//     foreach ($menu as $key => $item) {
//         echo "<li>{$item['nama']}</li>";
//     }
//     echo "</ul>";
//     }
//     tampilkanMenuBertingkat($menu);


// fungsi array dengan subMenu
function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        if (isset($item['subMenu'])){
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
    }
    tampilkanMenuBertingkat($menu);
?>