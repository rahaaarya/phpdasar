<?php
// Daftar Buku Perpustakaan
$books = [
    [
        "judul" => "Harry Potter and the Philosopher's Stone",
        "pengarang" => "J.K. Rowling",
        "tahun_terbit" => "1997",
        "jumlah_stok" => 10,
        "sampul" => "1.png"
    ],
    [
        "judul" => "To Kill a Mockingbird",
        "pengarang" => "Harper Lee",
        "tahun_terbit" => 1960,
        "jumlah_stok" => 8,
        "sampul" => "2.png"
    ],
    [
        "judul" => "The Great Gatsby",
        "pengarang" => "F. Scott Fitzgerald",
        "tahun_terbit" => 1925,
        "jumlah_stok" => 5,
        "sampul" => "3.png"
    ],
    [
        "judul" => "1984",
        "pengarang" => "George Orwell",
        "tahun_terbit" => 1949,
        "jumlah_stok" => 12,
        "sampul" => "4.png"
    ],
    [
        "judul" => "Pride and Prejudice",
        "pengarang" => "Jane Austen",
        "tahun_terbit" => 1813,
        "jumlah_stok" => 7,
        "sampul" => "5.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpustakaan</title>
    <style>
        h1 {
            text-align: center;
        }

        table {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Daftar Buku Perpustakaan</h1>
    <table border="1" cellpadding="5" cellspacing="0">

        <thead>
            <tr>
                <th>Judul </th>
                <th>Pengarang</th>
                <th>Tahun Terbit </th>
                <th>Jumlah Stok</th>
                <th>Sampul</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= $book["judul"]; ?></td>
                    <td><?= $book["pengarang"]; ?></td>
                    <td><?= $book["tahun_terbit"]; ?></td>
                    <td><?= $book["jumlah_stok"]; ?></td>
                    <td><img src="img/<?= $book["sampul"]; ?>" alt="sampul" style="width: 100px;"></td>
                </tr>

        </tbody>
    <?php endforeach; ?>
    </table>



</body>

</html>