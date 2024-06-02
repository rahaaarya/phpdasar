<?php
require_once __DIR__ . '/vendor/autoload.php'; // Sesuaikan dengan lokasi file autoload.php mPDF

// Inisialisasi mPDF
$mpdf = new \Mpdf\Mpdf();

// Mulai membuat halaman PDF
$mpdf->AddPage();

// Tambahkan konten ke halaman PDF
$html = '
    <h1>Laporan Data Mahasiswa</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>';

// Mengambil data mahasiswa dari database
require 'functions.php';
$mahasiswa = query("SELECT gambar, nim, nama, email, jurusan FROM mahasiswa");

foreach ($mahasiswa as $row) {
    // Path relatif dari direktori proyek Anda ke direktori gambar
    $gambarPath = 'img/' . $row['gambar'];

    // Membuat tag img HTML untuk gambar
    $gambarHtml = '<img src="' . $gambarPath . '" style="max-width: 100px; max-height: 100px;">';

    // Menambahkan data ke dalam tabel PDF
    $html .= '
        <tr>
            <td>' . $gambarHtml . '</td>
            <td>' . $row['nim'] . '</td>
            <td>' . $row['nama'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['jurusan'] . '</td>
        </tr>';
}

$html .= '</table>';

// Tambahkan HTML ke halaman PDF
$mpdf->WriteHTML($html);

// Keluarkan dokumen PDF
$mpdf->Output('laporan_mahasiswa.pdf', 'D');
?>
