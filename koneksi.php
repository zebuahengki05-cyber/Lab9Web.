<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan-1";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} 
// uncomment baris di bawah untuk menguji koneksi:
#else echo "Koneksi berhasil"; 
?>