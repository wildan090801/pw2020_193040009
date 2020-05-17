<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan kehalaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$alat_musik = query("SELECT * FROM alat_musik WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="icon" type="image/png" href="../assets/img/tittle.jpg">
    <title>NadLiw Music</title>
</head>

<body>
    <div class="container pb-5 pt-5 mb-5 mt-5 bg-light">
        <div class="bg_gambar row justify-content-center">
            <img src="../assets/img/<?= $alat_musik['Gambar']; ?>" alt="">
        </div>
        <div class="keterangan mr-2 mb-2 ">
            <p class="alat_musik" style="margin-top: 10px"><?= $alat_musik['Alat_musik']; ?></p>
            <p class="merk" style="margin-top: 10px"><?= $alat_musik['Merk']; ?></p>
            <p class="cara_bermain" style="margin-top: 10px"><?= $alat_musik['Cara_bermain']; ?></p>
            <p class="harga" style="margin-top: 10px"><?= $alat_musik['Harga']; ?></p>
        </div>
        <div class="row justify-content-center mb-1 pb-1">
            <a href="../alat_musik.php" class="btn btn-info" style="margin-top: 10px">Kembali</a>
        </div>
    </div>
</body>

</html>