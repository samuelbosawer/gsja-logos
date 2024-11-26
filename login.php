<?php


session_start(); // Memulai session

// Hardcoded username dan password
$valid_username = "L0g0sadmin";
$valid_password = "TUHANb4ik";

$error = ""; // Menyimpan pesan error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Filter input untuk mencegah serangan XSS
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Cek validitas login
    if ($username === $valid_username && $password === $valid_password) {
        // Set session jika login valid
        $_SESSION['username'] = $username;
        header("Location: buletin.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}


// Cek apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    header("Location: buletin.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center">
            <img src="assets/img/logo.png" alt="Logo" class="mb-4" style="width: 100px; height: auto;">
        </div>
        <h4 class="text-center mb-3">GSJA Logos Kotaraja</h4>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST">
            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukan username" required>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" required>
            </div>
            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
