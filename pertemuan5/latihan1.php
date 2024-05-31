<?php
// Array
// Variable yang dapat memiliki banyak nilai
// Elemen pada arrat dapat memiliki tipe data yang berbeda
// Pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// Cara Baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulisan", false];

// Menampilkan Array
// var_dump () / print_r ()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
