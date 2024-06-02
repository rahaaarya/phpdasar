<?php
// koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data dari mahasiswa dari object result
// mysqli_fetch_row() //mengmbalikan array numerik
// mysqli_fetch_assoc() //mengmbalikan array associative
// mysqli_fetch_array() //mengmbalikan keduanya
// mysqli_fetch_object()

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }
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
            /* Centering the table */
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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt=""></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; // Increment variabel penghitung 
            ?>
        <?php endwhile; ?>

    </table>
</body>

</html>