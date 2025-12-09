<?php
$anggota = [
    ["nama" => "Miftakhur Rizky", "npm" => "23753064"],
    ["nama" => "Arya Rohmatuloh", "npm" => "23753047"],
    ["nama" => "Febri Kurniawan", "npm" => "23753057"],
    ["nama" => "Dwi Meilia Rosa", "npm" => "23753055"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KELOMPOK KSI 2025</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
        .anggota-card {
            background: #ffffffd9;
            border-radius: 15px;
            backdrop-filter: blur(4px);
        }
        .table thead {
            background: #198754;
            color: white;
        }
        .table tbody tr:hover {
            background: #e9f7ef;
        }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
           Tugas KSI 2025
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<div class="container mt-4">
    <div class="alert alert-info text-center shadow-sm">
        Daftar Anggota Kelompok & Tugas KSI 2025
    </div>
</div>

<div class="container my-4 anggota-card p-4 shadow-sm">
    <h3 class="text-success fw-bold mb-3 text-center">Anggota Kelompok</h3>

    <table class="table table-bordered text-center align-middle">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anggota as $a): ?>
            <tr>
                <td><?= $a["nama"]; ?></td>
                <td><?= $a["npm"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>
