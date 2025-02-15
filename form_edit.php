<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Edit Data</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header>
    <h1>Form Input Data</h1>
    <p>Silakan isi form berikut untuk mengirimkan data Anda.</p>
  </header>

  <div class="container">
    <div class="form-container">
      <h2>Form Data</h2>
      <form action="control.php" method="POST">
        <div class="form-group">
          <label for="nama_produk">Nama Produk</label>
          <input type="text" id="nama_produk" name="nama_produk" placeholder="Masukkan nama produk">
        </div>
        <div class="form-group">
          <label for="harga_produk">Harga Produk</label>
          <input type="number" id="harga_produk" name="harga_produk" placeholder="Masukkan harga produk">
        </div>
        <div class="form-group">
          <label for="stok_produk">Stok Produk</label>
          <input type="number" id="stok_produk" name="stok_produk" placeholder="Masukkan stok produk">
        </div>
        <button type="submit">Kirim Data</button>
      </form>
    </div>
  </div>

</body>

</html>