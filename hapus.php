<?php
include 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil ID dari URL
$id = $_GET['id'];

// Query untuk mengambil data gambar berdasarkan ID
$sql = "SELECT gambar FROM buletin WHERE id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

// Cek apakah data ditemukan
if ($data) {
    // Hapus file gambar dari folder uploads
    $file_path = 'uploads/' . $data['gambar'];
    if (file_exists($file_path)) {
        unlink($file_path); // Menghapus file
    }

    // Hapus data dari database
    $sql_delete = "DELETE FROM buletin WHERE id = $id";
    if (mysqli_query($conn, $sql_delete)) {
        header("Location: buletin.php"); // Redirect ke halaman utama
        exit();
    } else {
        echo "Error menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "Data tidak ditemukan.";
}

mysqli_close($conn);
?>
