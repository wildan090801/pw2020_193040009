<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/tambah.css">
  <link rel="icon" type="image/png" href="../assets/img/tittle.jpg">
  <title>Tambah Data</title>
</head>

<body>
  <form action="" method="post">
    <div class="kotak_tambahdata">
      <h2 class="tambah_data">FORM TAMBAH DATA</h2>
      <form>
        <label for="Gambar">Gambar : </label>
        <input type="text" name="Gambar" id="Gambar" class="form_tambahdata" required>

        <label for="Alat_musik">Alat Musik : </label>
        <input type="text" name="Alat_musik" id="Alat_musik" class="form_tambahdata" required>

        <label for="Merk">Merk : </label>
        <input type="text" name="Merk" id="Merk" class="form_tambahdata" required>

        <label for="Cara_bermain">Cara Bermain : </label>
        <select name="Cara_bermain" id="Cara_bermain" class="form_tambahdata" required>
          <option value="">------- Pilih Cara Bermain -------</option>
          <option value="Dipetik">Dipetik</option>
          <option value="Dipukul">Dipukul</option>
          <option value="Digesek">Digesek</option>
          <option value="Ditiup">Ditiup</option>
          <option value="Menekan Tuts">Menekan Tuts</option>
          <option value="Ditiup dan Menekan Tuts">Ditiup dan Menekan Tuts</option>
        </select>

        <label for="Harga">Harga: </label>
        <input type="text" name="Harga" id="Harga" class="form_tambahdata" required>

        <button type="submit" name="tambah" class="tombol_tambahdata">Tambah Data!</button>
        <br><br>
        <center>
          <a class="link" href="admin.php">KEMBALI</a>
        </center>
      </form>

</body>

</html>