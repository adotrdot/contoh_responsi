<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "responsi2";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>