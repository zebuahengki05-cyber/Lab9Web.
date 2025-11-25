<?php
// Tentukan judul halaman
$page_title = "Home"; 
// Memanggil header.php yang berisi DOCTYPE, HTML, Header, dan Navigasi
require('header.php'); 
?>

<div class="content">
    <h2>Ini Halaman Home</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>

<?php 
// Memanggil footer.php yang berisi penutup Div Container, Body, dan HTML
require('footer.php'); 
?>