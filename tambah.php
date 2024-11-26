<?php
include 'koneksi.php';
session_start();
// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal = $_POST['tanggal'];
    $gambar = $_FILES['gambar']['name'];
    $target_dir = "uploads/";

    // Upload file gambar
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_dir . $gambar)) {
        $sql = "INSERT INTO buletin (tanggal, gambar) VALUES ('$tanggal', '$gambar')";
        if (mysqli_query($conn, $sql)) {
            header("Location: buletin.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Gagal mengupload gambar.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2>Tambah Data</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

                <div>
                    <a href="buletin.php" class="btn btn-warning">Kembali</a>
                    <a href="logout.php" class="btn btn-dark">Keluar</a>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>
