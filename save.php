<?php

include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $nama_produk = $_POST['nama_produk'];
  $harga_produk = $_POST['harga_produk'];
  $stok_produk = $_POST['stok_produk'];

  $sql = "INSERT INTO produk (nama_produk, harga_produk, stok) VALUES ('$nama_produk', '$harga_produk', '$stok_produk')";

  if (mysqli_query($conn, $sql)) {
    header("location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
