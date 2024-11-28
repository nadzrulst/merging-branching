<?php 
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Profil Pengguna</h4>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="mb-3">Halo, <span class="text-primary"><?= htmlspecialchars($_SESSION['name']); ?></span>!</h5>
                        <p>Anda berhasil login sebagai <strong>User</strong>.</p>
                        <a href="./backend/logout.php" class="btn btn-danger w-100">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
