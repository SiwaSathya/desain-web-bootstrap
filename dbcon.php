<?php
$servername = "localhost"; // Nama server
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$dbname = "desawisata"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

$asik = " anjay dh berhasil cuk";

// Memeriksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil" . $asik;

?>


