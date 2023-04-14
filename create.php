<?php


$servername = "localhost"; // Nama server
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$dbname = "desawisata"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

$nama = $_POST['nama'];
$number = $_POST['nomor'];
$addres = $_POST['addres'];

// Query untuk menambahkan data ke database
$query = "INSERT INTO guest (nama, nomor,addres) VALUES ('$nama', '$number','$addres')";



if (mysqli_query($conn, $query)) {
    echo "Data berhasil ditambahkan";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }

// Menutup koneksi database
mysqli_close($conn);

// Redirect kembali ke halaman form
header("Location: saran.php");

?>