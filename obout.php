<?php
// 1. Tentukan judul halaman
$page_title = "Tentang Aplikasi"; 

// 2. Panggil header.php untuk menampilkan struktur awal dan navigasi
require('header.php'); 
?>

<div class="content">
    <h2>Tentang Aplikasi Data Barang</h2>
    
    <p>Aplikasi ini dikembangkan sebagai bagian dari modul Praktikum Pemrograman Web oleh Agung Nugroho.</p>
    <p>Ini adalah contoh sederhana implementasi operasi CRUD (Create, Read, Update, Delete) data barang menggunakan bahasa pemrograman PHP dan database MySQL.</p>
    
    <h3>Fitur Utama:</h3>
    <ul>
        <li>Menampilkan Daftar Barang (Index)</li>
        <li>Menambah Barang Baru (Tambah)</li>
        <li>Mengubah Detail Barang (Ubah)</li>
        <li>Menghapus Barang (Hapus)</li>
    </ul>
    
    <p>Untuk kembali ke daftar data barang, silakan klik tautan "Data Barang" di navigasi.</p>
</div>

<?php 
// 3. Panggil footer.php untuk menutup tag HTML
require('footer.php'); 
?>