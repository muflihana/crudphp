<?php
$server = "localhost";
$database = "test";
$username = "root";
$password = "";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$mysqli = mysqli_connect($server, $username, $password, $database);
// mengecek koneksi
if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
//print("Koneksi Berhasil");
//mysqli_close($mysqli);
?>