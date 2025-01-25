<?php


$host = "localhost";
$username = "root"; // Username MySQL Anda
$password = "root"; // Password MySQL Anda
$database = "logos";

// $host = "localhost";
// $username = "sipj9367_logos"; // Username MySQL Anda
// $password = "sipj9367_logos"; // Password MySQL Anda
// $database = "sipj9367_logos";

$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}




?>
