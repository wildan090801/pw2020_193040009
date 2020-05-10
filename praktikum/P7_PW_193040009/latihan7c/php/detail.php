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
    <title>Latihan 5c</title>
</head>
<body>
    <div class="container">
        <div class="bg_gambar" >
            <img  src="../assets/img/<?= $alat_musik['Gambar']; ?>" alt="">
        </div>
        <div class="keterangan">
            <p class="alat_musik"><?= $alat_musik['Alat_musik'];?></p>
            <p class="merk"><?= $alat_musik['Merk'];?></p>
            <p class="cara_bermain"><?= $alat_musik['Cara_bermain'];?></p>
            <p class="harga"><?= $alat_musik['Harga'];?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>