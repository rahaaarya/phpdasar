<?php
// Date
// Atur zona waktu sesuai dengan zona waktu di lokasi Anda
date_default_timezone_set('Asia/Jakarta');

// echo date("l j \of F Y h:i:s A");

// Time
// UNIX Timestamp / EPOCH time
//  detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("d M Y", time() + 60 * 60 * 24 * 100);

// Mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0)
// Jam, Ment, detik, bulan, tanggal, tahun
// echo date("l, d M Y", mktime(0, 0, 0, 1, 3, 2004));

// Strtotime
// echo date("l", strtotime("3 Jan 2004"));
