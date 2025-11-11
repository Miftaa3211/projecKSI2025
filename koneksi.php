<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisuda_online_demo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi ke database berhasil";
?>