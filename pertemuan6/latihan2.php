<?php
// $mahasiswa = [
//     ["Arya", "1222001", "raharjaarya666@gmail.com", "Teknik Informatika"],
//     ["Budi", "122202", "raharjaarya813@gmail.com", "Teknik Informasi"]
// ];

// Array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Arya",
        "NIM" => "1222001",
        "email" => "raharjaarya666@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "arya.png"
    ],
    [
        "nama" => "Nisrina",
        "NIM" => "1222002",
        "email" => "nsrnmhr@gmail.com",
        "jurusan" => "Farmasi",
        "gambar" => "mahira.png"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["NIM"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li><img src="img/<?= $mhs["gambar"]; ?>" alt="gambar"></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>