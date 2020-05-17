<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

// melalukan query
$alat_musik = query("SELECT * FROM alat_musik ORDER BY Alat_musik ASC");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat_musik = query(
    "SELECT * FROM alat_musik WHERE
        Gambar LIKE '%$keyword%' OR
        Alat_musik LIKE '%$keyword%' OR
        Merk LIKE '%$keyword%' OR
        Cara_bermain LIKE '%$keyword%' OR
        Harga LIKE '%$keyword%'
        "
  );
} else {
  $alat_musik = query("SELECT * FROM alat_musik");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="icon" type="image/png" href="../assets/img/tittle.jpg">
  <title>Admin</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div><br>
  <div class="logout">
    <a href="logout.php"><button>Logout</button></a>
  </div><br>
  <form action="" method="GET">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form><br>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr class="fieldname">
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Alat Musik</th>
      <th>Merk</th>
      <th>Cara Bermain</th>
      <th>Harga</th>
    </tr>
    <?php if (empty($alat_musik)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($alat_musik as $am) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $am['id'] ?>" class="ubah"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $am['id'] ?>" onclick="return confirm('Apakah anda yakin ingin Menghapus Data ???')" class="hapus"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $am['Gambar']; ?>" alt=""></td>
          <td><?= $am['Alat_musik']; ?></td>
          <td><?= $am['Merk']; ?></td>
          <td><?= $am['Cara_bermain']; ?></td>
          <td>Rp <?= $am['Harga']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>