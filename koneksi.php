<?php
//koneksi.php
$host   = 'localhost';
$user   = 'root'; // ganti dengan username database kamu
$pass   = '';     //ganti dengan password database kamu
$db_name = 'kopi_kita';

$koneksi = new mysqli($host, $user, $pass, $db_name);

if ($koneksi->connect_error) {
    die("koneksi gagal: " . $koneksi->connect_error);
}

// Data Admin Sederhana (untuk keperluan tutorial)
// Di LINGKUNGAN PRODUKSI, GUNAKAN TABEL USER DAN HASHING PASSWORD!
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', '12345'); // Ganti dengan password yang lebih