<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Beluttn</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Input Data Buletin</h2>
            <a href="#" class="btn btn-danger">Logout</a>
        </div>

        <!-- Form Input -->
        <div class="card shadow-sm p-4">
            <form action="#" method="post" enctype="multipart/form-data">
                <!-- Field Tanggal -->
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                </div>
                <!-- Field Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control" accept="image/*" required>
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
