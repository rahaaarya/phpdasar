<?php
$mhs = [
    ["Arya", "1222001", "Teknik Informatika", "raharjaarya@gmail.com"],    ["Budi", "1222022", "Teknik Informasi", "raharjabudi@gmail.com"], ["Nisrina", "1222023", "Farmasi", "nsrnmhr@gmail.com"]
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
    <?php foreach ($mhs as $m) :  ?>

        <ul>
            <li>Nama : <?= $m[0]; ?></li>
            <li>NIM : <?= $m[1]; ?></li>
            <li>Jurusan : <?= $m[2]; ?></li>
            <li>Email : <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>