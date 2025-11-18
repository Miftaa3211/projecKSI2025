<?php
session_start();

$nama = "Arya Rohmatuloh";
$nim = "12345678";
$prodi = "Manajemen Informatikas";
$email = "rohmatuloharya@gmail.com";
?>

<html>
<head>
  <title>Dashboard Mahasiswa - Pendaftaran Wisuda</title>
</head>

<body class="bg-white font-sans">

  <!-- Header -->
  <header class="p-4 border-b flex justify-between">
    <h2 class="text-lg font-bold">Dashboard Mahasiswa</h2>
    <nav class="flex gap-4 text-sm">
      <a href="#">Beranda</a>
      <a href="#">Pendaftaran Wisuda</a>
      <a href="#">Profil</a>
      <a href="logout.php" class="text-red-600">Logout</a>
    </nav>
  </header>

  <!-- Main -->
  <main class="p-6 max-w-4xl mx-auto">

    <!-- Profil Mahasiswa -->
    <h1 class="text-xl font-bold mb-4">Profil Mahasiswa</h1>
    <div class="border rounded p-4 mb-8">
      <p><strong>Nama:</strong> <?= $nama ?></p>
      <p><strong>NIM:</strong> <?= $nim ?></p>
      <p><strong>Program Studi:</strong> <?= $prodi ?></p>
      <p><strong>Email:</strong> <?= $email ?></p>
    </div>

    <!-- Upload Dokumen Wisuda -->
    <h2 class="text-xl font-bold mb-4">Upload Dokumen Pendaftaran Wisuda</h2>
    <div class="border rounded p-4">

      <form action="upload_dokumen.php" method="POST" enctype="multipart/form-data" class="space-y-4">

        <div>
          <label class="font-semibold">KTP (PDF/JPG)</label><br>
          <input type="file" name="ktp" class="border p-2 w-full mt-1" required>
        </div>

        <div>
          <label class="font-semibold">Kartu Keluarga (PDF/JPG)</label><br>
          <input type="file" name="kk" class="border p-2 w-full mt-1" required>
        </div>

        <div>
          <label class="font-semibold">Transkrip Nilai (PDF)</label><br>
          <input type="file" name="transkrip" class="border p-2 w-full mt-1" required>
        </div>

        <div>
          <label class="font-semibold">Foto 3x4 (JPG/PNG)</label><br>
          <input type="file" name="foto" class="border p-2 w-full mt-1" required>
        </div>

        <button type="submit" class="bg-black text-white px-4 py-2 rounded">
          Upload Dokumen
        </button>

      </form>
    </div>

  </main>

</body>
</html>
