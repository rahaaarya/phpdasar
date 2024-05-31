<?php

// $_GET


$mahasiswa = [
    [
        "nama" => "Arya Budi Raharja",
        "NIM" => "1222001",
        "email" => "raharjaarya666@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "arya.png"
    ],
    [
        "nama" => "Nisrina Mahira",
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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Nama Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&NIM=<?= $mhs["NIM"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"]; ?> </a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>