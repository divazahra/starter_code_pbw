<?php

include("conetion.php");

$query  = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Katalog Produk</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header>
    <h1>Katalog Produk</h1>
  </header>

  <a href="form_input.php">
    <button class="btn-tambah">Tambah Data</button>
  </a>

  <div class="container">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['foto_produk'] != null) {
        $foto_produk = $row['foto_produk'];
      } else {
        $foto_produk = '';
      }
    ?>
      <div class="product">
        <img src="<?= $foto_produk ?>" alt="<?= $row['nama_produk'] ?>">
        <h3><?= $row['nama_produk'] ?></h3>
        <div class="price">Rp <?= $row['harga_produk'] ?></div>
        <a href="#" class="button">Beli Sekarang</a>
      </div>
    <?php
    }
    ?>
  </div>

</body>

</html>