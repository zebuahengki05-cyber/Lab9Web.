<?php
// Modul ini hanya menjalankan proses DELETE dari database.

// 1. Menyertakan koneksi database
include_once 'koneksi.php';

// 2. Mengambil ID dari URL (yang dikirim dari link "Hapus" di index.php)
$id = $_GET['id'];

// 3. Query DELETE data berdasarkan ID
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";

// 4. Menjalankan query
$result = mysqli_query($conn, $sql);

// 5. Mengarahkan pengguna kembali ke halaman utama (index.php) setelah penghapusan
header('location: index.php');
?>