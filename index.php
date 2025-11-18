<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wisuda Politeknik Negeri Lampung</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
  <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <img src="assets/img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
            Wisuda Polinela
            <span class="badge bg-danger rounded-pill ms-1" style="font-size: 10px; vertical-align: top;">New</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="ms-auto">
                <button class="btn btn-outline-light btn-sm" onclick="window.location='login.php'">Login</button>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="alert alert-info text-center mt-4 shadow-sm border-0">
        Selamat datang di Website Wisuda Politeknik Negeri Lampung!
    </div>
</div>

<section class="text-center py-4 flex-grow-1">
  <h1 class="fw-bold text-success">Sistem Pendaftaran Wisuda Online</h1>
  <p class="text-muted mb-5">Politeknik Negeri Lampung</p>

  <div class="container">
    <div class="row g-4">
      
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
          <div class="card-body">
            <h5 class="card-title fw-bold text-primary">Persyaratan</h5>
            <p class="card-text text-muted">Pastikan semua berkas sudah lengkap sesuai ketentuan akademik sebelum mendaftar.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
          <div class="card-body">
            <h5 class="card-title fw-bold text-warning">Statistik Wisuda</h5>
            <p class="card-text text-muted">Tahun lalu: <strong>512</strong> mahasiswa lulus dari 8 jurusan berbeda.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 hover-card">
          <div class="card-body">
            <h5 class="card-title fw-bold text-danger">Info & Lokasi</h5>
            <p class="card-text text-muted">
                <strong>Lokasi:</strong> GSG Polinela<br>
                <strong>Jadwal:</strong> 20 Desember 2025
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<footer class="bg-success text-white text-center py-3 mt-5">
    <div class="container">
        <small>&copy; 2025 Politeknik Negeri Lampung. All Rights Reserved.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>