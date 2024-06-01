<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

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

        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 20px;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            background-color: white;
            box-shadow: 2px 2px 2px 2px grey;
            transition: 0.5s;
        }
    </style>
</head>

<body>

    <a href="logout.php">Logout</a>
    <h1 style="text-align: center;">Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data +</a>
    <br><br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    </form>

    
    <br>
    <div id="container">
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
                    <a href="edit.php?id=<?= $row["id"]; ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data atas nama <?= $row["nama"]; ?>?');">Delete</a>
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
    </div>

    <script src="js/script.js"></script>

</body>

</html>