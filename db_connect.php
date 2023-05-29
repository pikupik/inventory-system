<?php
$host = 'localhost'; // Ganti dengan host database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$database = 'login'; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa apakah terjadi error saat melakukan koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
