<?php
// Tentukan judul dinamis jika perlu, atau gunakan judul default
$page_title = isset($page_title) ? $page_title : 'Aplikasi Data Barang';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $page_title; ?></title>
<link href="style.css" rel="stylesheet" type="text/css"
media="screen" />
</head>
<body>
<div class="container">
<nav>
<a href="index.php">Home</a>
<a href="about.php">Tentang</a>
<a href="kontak.php">Kontak</a>
</nav>