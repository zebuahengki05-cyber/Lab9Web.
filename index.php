<?php
// Memanggil file koneksi.php untuk menghubungkan ke database
include("koneksi.php"); 

// query untuk menampilkan seluruh data dari tabel data_barang
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 

// Menentukan judul halaman untuk header.php
$page_title = "Data Barang"; 

// --- BAGIAN HEADER ---
include('header.php'); // Menyertakan header dan navigasi
?>
        <h1>Data Barang</h1>
        <p><a href="tambah.php">Tambah Barang</a></p>
        <div class="main">
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Katagori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>" style="max-width: 100px;"></td> 
                        
                        <td><?= $row['nama'];?></td> 
                        
                        <td><?= $row['kategori'];?></td> 
                        
                        <td><?= $row['harga_jual'];?></td> 
                        
                        <td><?= $row['harga_beli'];?></td> 
                        
                        <td><?= $row['stok'];?></td> 
                        
                        <td>
                            <a href="ubah.php?id=<?= $row['id_barang'];?>">Ubah</a> 
                            <a href="hapus.php?id=<?= $row['id_barang'];?>">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                <?php // Pengecekan harusnya ada di luar loop/setelah, tapi mengikuti struktur if($result) sebelumnya. ?>
                <?php // Jika tidak ada data, pesan ini yang akan ditampilkan jika $result bukan false.?> 
                <?php // Sebaiknya cek jumlah baris: if(mysqli_num_rows($result) == 0): ?>
                <?php // Jika tidak ada data, baris 'Belum ada data' ini harusnya tidak dieksekusi jika $result ada isinya. ?>
                <?php // Jika $result ada, maka baris ini ditampilkan SETELAH SEMUA data ditampilkan. Logika ini perlu diperbaiki.
                // Logika asal: if($result) { ... while($row) { ... } <tr><td colspan='7'>Belum ada data</td></tr> }
                // Jika Anda ingin menampilkan pesan "Belum ada data" HANYA jika tidak ada data:
                // Ganti if($result): menjadi if(mysqli_num_rows($result) > 0): dan hapus baris td colspan='7'
                ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
<?php
// --- BAGIAN FOOTER ---
include('footer.php'); // Menyertakan footer
?>