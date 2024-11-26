<?php
include 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data berdasarkan ID
$id = $_GET['id'];
$sql = "SELECT * FROM buletin WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggal = $_POST['tanggal'];
    $gambar = $row['gambar'];

    if (!empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        $target_dir = "uploads/";
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target_dir . $gambar);
    }

    $sql = "UPDATE buletin SET tanggal = '$tanggal', gambar = '$gambar' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: buletin.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2>Ubah Data</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $row['tanggal'] ?>" required>
            </div>
            <div class="mb-3">
                  <img src='uploads/<?= $row['gambar']?>' alt='Gambar' style='width: 100px; height: auto;'>
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
