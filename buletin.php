<?php
include 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login

    
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}



// Query untuk mengambil data dari tabel buletin
$sql = "SELECT * FROM buletin ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

include 'format.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buletin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2>Data Buletin</h2>
        <div class="d-flex justify-content-between">
            <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
            <a href="logout.php" class="btn btn-dark mb-3">Keluar</a>
        </div>
 
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr class="text-center">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $no++ . "</td>";
                        echo "<td>" . format($row['tanggal']) . "</td>";
                        echo "<td><img src='uploads/" . $row['gambar'] . "' alt='Gambar' style='width: 100px; height: auto;'></td>";
                        echo "<td>
                                <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
