<?php 
include("KONEKSI.php");
// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Data Barang</title>
</head>

<body>

<div class= "container">
        <header>
            <h1> <center>Modularisasi Menggunakan Require </h1>
        </header>
        <nav>
            <a href="HOME.php"> Home</a>
            <a href="ABOUT.PHP">About</a>
        </nav>
        
    </div>
  
  <div class="container">
    <h1> <center>Data Barang</h1>
    <center><a href="tambah.php" class="tambah">Tambah Barang</a> 
    <div class="main">
    <center><table> 
        <tr>
          <th>NO</th>
          <th>Gambar</th>
          <th>Nama Barang</th>
          <th>Katagori</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok</th>
          <th>Aksi</th>
        </tr>
        <?php if($result): ?>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_array($result)):  ?>
        <tr>
          <td><?= $i; ?></td>
          <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>" width="100">
          </td>
          <td><?= $row['nama'];?></td>
          <td><?= $row['kategori'];?></td>
          <td><?= $row['harga_beli'];?></td>
          <td><?= $row['harga_jual'];?></td>
          <td><?= $row['stok'];?></td>
          <td>
            <a href="ubah.php?id_barang=<?= $row['id_barang'];?>" class="button">Ubah</a>
            <a href="hapus.php?id_barang=<?= $row['id_barang'];?>" class="button1">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; else: ?>
        <tr>
          <td colspan="7">Belum ada data</td>
        </tr>
        <?php endif; ?>
      </table>
    </div>
  </div>
  <footer>
    <p>&copy; 2022, Informatika, Universitas Pelita Bangsa</p>
</footer>


</body>

</html>

