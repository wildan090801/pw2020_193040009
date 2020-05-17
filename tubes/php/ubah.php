<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$am = query("SELECT * FROM alat_musik WHERE id =  $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasi Diubah!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal Diubah!');
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
  <link rel="stylesheet" type="text/css" href="../css/ubah.css">
  <link rel="icon" type="image/png" href="../assets/img/tittle.jpg">
  <title>Ubah Data</title>
</head>

<body>
  <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $am['id']; ?>">
    <div class="kotak_ubahdata">
      <h2 class="ubah_data">FORM UBAH DATA</h2>
      <form>
        <label for="Gambar">Gambar : </label>
        <input type="text" name="Gambar" id="Gambar" class="form_ubahdata" required value="<?= $am['Gambar']; ?>">

        <label for="Alat_musik">Alat Musik : </label>
        <input type="text" name="Alat_musik" id="Alat_musik" class="form_ubahdata" required value="<?= $am['Alat_musik']; ?>">

        <label for="Merk">Merk : </label>
        <input type="text" name="Merk" id="Merk" class="form_ubahdata" required value="<?= $am['Merk']; ?>">

        <label for="Cara_bermain">Cara Bermain : </label>
        <select name="Cara_bermain" id="Cara_bermain" class="form_ubahdata" required value="<?= $am['Cara_bermain']; ?>">
          <option value="">------- Pilih Cara Bermain -------</option>
          <option value="Dipetik">Dipetik</option>
          <option value="Dipukul">Dipukul</option>
          <option value="Digesek">Digesek</option>
          <option value="Ditiup">Ditiup</option>
          <option value="Menekan Tuts">Menekan Tuts</option>
          <option value="Ditiup dan Menekan Tuts">Ditiup dan Menekan Tuts</option>
        </select>

        <label for="Harga">Harga: </label></li>
        <input type="text" name="Harga" id="Harga" class="form_ubahdata" required value="<?= $am['Harga']; ?>">

        <button type="submit" name="ubah" class="tombol_ubahdata">Ubah Data!</button>
        <br><br>
        <center>
          <a class="link" href="admin.php">KEMBALI</a>
        </center>
      </form>




</body>

</html>