<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form Tambah Data Alat Musik</h3>
  <form action="" method="POST">
    <ul>
      <li><label for="Gambar">Gambar : </label></li>
      <input type="text" name="Gambar" id="Gambar" required><br><br>


      <li><label for="Alat_musik">Alat Musik : </label></li>
      <input type="text" name="Alat_musik" id="Alat_musik" required><br><br>

      <li><label for="Merk">Merk : </label></li>
      <input type="text" name="Merk" id="Merk" required><br><br>

      <li><label for="Cara_bermain">Cara Bermain : </label><br>
        <select name="Cara_bermain" id="Cara_bermain" required>
          <option value="">------- Pilih Cara Bermain -------</option>
          <option value="Dipetik">Dipetik</option>
          <option value="Dipukul">Dipukul</option>
          <option value="Digesek">Digesek</option>
          <option value="Ditiup">Ditiup</option>
          <option value="Menekan Tuts">Menekan Tuts</option>
          <option value="Ditiup dan Menekan Tuts">Ditiup dan Menekan Tuts</option>
        </select>
      </li>
      <br>

      <li><label for="Harga">Harga: </label></li>
      <input type="text" name="Harga" id="Harga" required><br><br>

      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>

</body>

</html>

<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasi Ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
  }
}

?>