<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// pagination
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        .logout-container {
            display: flex;
            justify-content: flex-start;
            width: 90%;
            margin-top: 20px;
        }

        .logout {
            text-decoration: none;
            color: black;
            font-weight: bold;
            padding: 10px 15px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: white;
            box-shadow: 2px 2px 2px grey;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .logout:hover {
            background-color: #f0f0f0;
            box-shadow: 2px 2px 5px grey;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin-bottom: 20px;
        }

        .top-bar .left, .top-bar .right {
            display: flex;
            align-items: center;
        }

        .top-bar a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            padding: 10px 15px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: white;
            box-shadow: 2px 2px 2px grey;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .top-bar a:hover {
            background-color: #f0f0f0;
            box-shadow: 2px 2px 5px grey;
        }

        .search-container input {
            padding: 10px;
            width: 200px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .search-container button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #333;
        }

        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 2px 2px 10px grey;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        img {
            width: 100px;
            height: auto;
        }

        .pagination {
            display: flex;
            justify-content: flex-end;
            width: 90%;
            margin: 20px 0;
        }

        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: white;
            box-shadow: 2px 2px 2px grey;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .pagination a:hover {
            background-color: #f0f0f0;
            box-shadow: 2px 2px 5px grey;
        }

        .pagination a.active {
            background-color: black;
            color: white;
            box-shadow: 2px 2px 5px grey;
        }
    </style>
</head>

<body>

    <div class="logout-container">
        <a class="logout" href="logout.php">Logout</a>
    </div>

    <h1>Daftar Mahasiswa</h1>

    <div class="top-bar">
        <div class="left">
            <a href="tambah.php">Tambah Data +</a>
        </div>
        <div class="right">
            <form class="search-container" action="" method="POST">
                <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
                <button type="submit" name="cari">Cari!</button>
            </form>
        </div>
    </div>

    <table>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
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
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <div class="pagination">
        <a href="?halaman=1">First</a>
        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
                <a href="?halaman=<?= $i; ?>" class="active"><?= $i; ?></a>
            <?php else : ?>
                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <a href="?halaman=<?= $jumlahHalaman; ?>">Last</a>
    </div>

</body>

</html>
