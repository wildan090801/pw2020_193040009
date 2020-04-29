<?php

// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan Query
$alat_musik = query("SELECT FROM * alat_musik");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($alat_musik as $am) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assests/img/<?= $am['Gambar']; ?>" alt=""></td>
        <td><?= $am['Alat_musik']; ?></td>
        <td><?= $am['Merk']; ?></td>
        <td><?= $am['Cara_bermain']; ?></td>
        <td>Rp <?= $am['Harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>