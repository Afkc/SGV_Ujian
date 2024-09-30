<?php
// koneksi.php

$host = "localhost";   // Nama host atau IP server database
$user = "root";        // Username database MySQL
$pass = "";            // Password database MySQL
$db   = "ecommerce";   // Nama database yang akan digunakan

// Buat Koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek Koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
