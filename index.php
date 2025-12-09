<?php
$anggota = [
    ["nama" => "Miftakhur Rizky", "npm" => "23753064"],
    ["nama" => "Arya Rohmatuloh", "npm" => "23753047"],
    ["nama" => "Febri Kurniawan", "npm" => "23753057"],
    ["nama" => "Dwi Meilia rosa", "npm" => "23753055"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota & Tugas KSI</title>

    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #4f46e5, #9333ea);
            color: white;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #ffffff20;
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 20px #00000040;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: 700;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ffffff40;
        }

        th {
            background: #ffffff30;
            font-weight: 600;
        }

        tr:hover {
            background: #ffffff25;
            transition: 0.3s;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>📘 Daftar Anggota Kelompok & Tugas KSI</h1>

        <table>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Tugas</th>
            </tr>

            <?php foreach ($anggota as $a): ?>
            <tr>
                <td><?= $a["nama"]; ?></td>
                <td><?= $a["npm"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <div class="footer">
            © <?= date("Y"); ?> | Kelompok KSI | Desain Web Sederhana
        </div>
    </div>
</body>
</html>
