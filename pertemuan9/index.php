<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <style>
        table {
            margin: 20px auto;
        }

        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; // Variabel penghitung 
        ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt=""></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; // Increment variabel penghitung 
            ?>
        <?php endforeach; ?>
    </table>
</body>

</html>