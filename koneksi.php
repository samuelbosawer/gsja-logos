<?php


$host = "localhost";
$username = "root"; // Username MySQL Anda
$password = "root"; // Password MySQL Anda
$database = "logos";

$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}




?>
